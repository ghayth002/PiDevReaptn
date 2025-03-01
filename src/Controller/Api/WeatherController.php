<?php

namespace App\Controller\Api;

use App\Service\MockWeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;

#[Route('/api/weather')]
class WeatherController extends AbstractController
{
    private $httpClient;
    private $apiKey;
    private $mockWeatherService;
    private $useMockData = false;

    public function __construct(HttpClientInterface $httpClient, MockWeatherService $mockWeatherService)
    {
        $this->httpClient = $httpClient;
        $this->mockWeatherService = $mockWeatherService;
        
        // You'll need to register at OpenWeatherMap and get a free API key
        // Then add it to your .env file as OPENWEATHERMAP_API_KEY
        $this->apiKey = $_ENV['OPENWEATHERMAP_API_KEY'] ?? null;
        
        // Use mock data if API key is not set or if we're in dev mode and want to test
        $this->useMockData = !$this->apiKey || ($_ENV['APP_ENV'] === 'dev' && isset($_ENV['USE_MOCK_WEATHER']) && $_ENV['USE_MOCK_WEATHER'] === 'true');
    }

    #[Route('/current', name: 'api_weather_current')]
    public function getCurrentWeather(Request $request): JsonResponse
    {
        // Default to a location if none provided
        $city = $request->query->get('city', 'Tunis');
        $country = $request->query->get('country', 'tn');
        
        // Use mock data if API key is not set or if we're in dev mode
        if ($this->useMockData) {
            return $this->json($this->mockWeatherService->getCurrentWeather($city, $country));
        }

        if (!$this->apiKey) {
            return $this->json([
                'error' => 'API key not configured. Please add OPENWEATHERMAP_API_KEY to your .env file.'
            ], 500);
        }

        try {
            $response = $this->httpClient->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
                'query' => [
                    'q' => "$city,$country",
                    'appid' => $this->apiKey,
                    'units' => 'metric'
                ],
                'timeout' => 5 // 5 seconds timeout
            ]);

            // Check if the response status code is successful (2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                $data = $response->toArray();
                
                // Format the response
                $result = [
                    'location' => [
                        'city' => $city,
                        'country' => $country,
                    ],
                    'weather' => [
                        'main' => $data['weather'][0]['main'] ?? null,
                        'description' => $data['weather'][0]['description'] ?? null,
                        'icon' => $data['weather'][0]['icon'] ?? null,
                        'icon_url' => 'https://openweathermap.org/img/wn/' . ($data['weather'][0]['icon'] ?? '') . '@2x.png',
                    ],
                    'temperature' => [
                        'current' => $data['main']['temp'] ?? null,
                        'feels_like' => $data['main']['feels_like'] ?? null,
                        'min' => $data['main']['temp_min'] ?? null,
                        'max' => $data['main']['temp_max'] ?? null,
                    ],
                    'humidity' => $data['main']['humidity'] ?? null,
                    'wind' => [
                        'speed' => $data['wind']['speed'] ?? null,
                        'direction' => $data['wind']['deg'] ?? null,
                    ],
                    'timestamp' => $data['dt'] ?? null,
                    'sunrise' => $data['sys']['sunrise'] ?? null,
                    'sunset' => $data['sys']['sunset'] ?? null,
                ];

                return $this->json($result);
            } else {
                // If API returns an error, fall back to mock data
                return $this->json($this->mockWeatherService->getCurrentWeather($city, $country));
            }
        } catch (HttpExceptionInterface $e) {
            // Fall back to mock data on HTTP exceptions
            return $this->json($this->mockWeatherService->getCurrentWeather($city, $country));
        } catch (TransportExceptionInterface $e) {
            // Fall back to mock data on transport exceptions
            return $this->json($this->mockWeatherService->getCurrentWeather($city, $country));
        } catch (\Exception $e) {
            // Fall back to mock data on any other exceptions
            return $this->json($this->mockWeatherService->getCurrentWeather($city, $country));
        }
    }

    #[Route('/forecast', name: 'api_weather_forecast')]
    public function getWeatherForecast(Request $request): JsonResponse
    {
        // Default to a location if none provided
        $city = $request->query->get('city', 'Tunis');
        $country = $request->query->get('country', 'tn');
        $days = min(5, max(1, (int)$request->query->get('days', 5))); // Limit to 5 days max

        if (!$this->apiKey || $this->useMockData) {
            // Generate mock forecast data
            $forecasts = [];
            $currentDate = new \DateTime();
            
            for ($i = 0; $i < $days; $i++) {
                $date = clone $currentDate;
                $date->modify("+$i days");
                $dateStr = $date->format('Y-m-d');
                
                // Generate a mock weather for this day
                $mockWeather = $this->mockWeatherService->getCurrentWeather($city, $country);
                
                $forecasts[] = [
                    'date' => $dateStr,
                    'min_temp' => $mockWeather['temperature']['min'],
                    'max_temp' => $mockWeather['temperature']['max'],
                    'weather_icons' => [$mockWeather['weather']['icon']],
                    'weather_descriptions' => [$mockWeather['weather']['description']],
                    'forecasts' => [
                        [
                            'time' => '09:00',
                            'temperature' => $mockWeather['temperature']['current'] - 2,
                            'weather' => $mockWeather['weather']['main'],
                            'description' => $mockWeather['weather']['description'],
                            'icon' => $mockWeather['weather']['icon'],
                            'icon_url' => $mockWeather['weather']['icon_url'],
                        ],
                        [
                            'time' => '12:00',
                            'temperature' => $mockWeather['temperature']['current'],
                            'weather' => $mockWeather['weather']['main'],
                            'description' => $mockWeather['weather']['description'],
                            'icon' => $mockWeather['weather']['icon'],
                            'icon_url' => $mockWeather['weather']['icon_url'],
                        ],
                        [
                            'time' => '18:00',
                            'temperature' => $mockWeather['temperature']['current'] - 1,
                            'weather' => $mockWeather['weather']['main'],
                            'description' => $mockWeather['weather']['description'],
                            'icon' => $mockWeather['weather']['icon'],
                            'icon_url' => $mockWeather['weather']['icon_url'],
                        ],
                    ]
                ];
            }
            
            return $this->json([
                'location' => [
                    'city' => $city,
                    'country' => $country,
                ],
                'forecast' => $forecasts,
                'is_mock' => true
            ]);
        }

        try {
            $response = $this->httpClient->request('GET', 'https://api.openweathermap.org/data/2.5/forecast', [
                'query' => [
                    'q' => "$city,$country",
                    'appid' => $this->apiKey,
                    'units' => 'metric',
                    'cnt' => $days * 8 // 8 forecasts per day (every 3 hours)
                ],
                'timeout' => 5 // 5 seconds timeout
            ]);

            // Check if the response status code is successful (2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                $data = $response->toArray();
                
                // Group forecast by day
                $forecastByDay = [];
                foreach ($data['list'] as $forecast) {
                    $date = (new \DateTime('@' . $forecast['dt']))->format('Y-m-d');
                    
                    if (!isset($forecastByDay[$date])) {
                        $forecastByDay[$date] = [
                            'date' => $date,
                            'forecasts' => [],
                            'min_temp' => PHP_FLOAT_MAX,
                            'max_temp' => PHP_FLOAT_MIN,
                            'weather_icons' => [],
                            'weather_descriptions' => []
                        ];
                    }
                    
                    $forecastByDay[$date]['forecasts'][] = [
                        'time' => (new \DateTime('@' . $forecast['dt']))->format('H:i'),
                        'temperature' => $forecast['main']['temp'],
                        'weather' => $forecast['weather'][0]['main'],
                        'description' => $forecast['weather'][0]['description'],
                        'icon' => $forecast['weather'][0]['icon'],
                        'icon_url' => 'https://openweathermap.org/img/wn/' . $forecast['weather'][0]['icon'] . '@2x.png',
                    ];
                    
                    // Update min/max temperature
                    $forecastByDay[$date]['min_temp'] = min($forecastByDay[$date]['min_temp'], $forecast['main']['temp']);
                    $forecastByDay[$date]['max_temp'] = max($forecastByDay[$date]['max_temp'], $forecast['main']['temp']);
                    
                    // Collect weather icons and descriptions
                    if (!in_array($forecast['weather'][0]['icon'], $forecastByDay[$date]['weather_icons'])) {
                        $forecastByDay[$date]['weather_icons'][] = $forecast['weather'][0]['icon'];
                    }
                    
                    if (!in_array($forecast['weather'][0]['description'], $forecastByDay[$date]['weather_descriptions'])) {
                        $forecastByDay[$date]['weather_descriptions'][] = $forecast['weather'][0]['description'];
                    }
                }
                
                return $this->json([
                    'location' => [
                        'city' => $city,
                        'country' => $country,
                    ],
                    'forecast' => array_values($forecastByDay)
                ]);
            } else {
                // Fall back to mock data
                return $this->getWeatherForecast($request);
            }
        } catch (\Exception $e) {
            // Fall back to mock data
            return $this->getWeatherForecast($request);
        }
    }

    #[Route('/seasonal-products', name: 'api_weather_seasonal_products')]
    public function getSeasonalProducts(Request $request): JsonResponse
    {
        // Get current weather to determine season
        $city = $request->query->get('city', 'Tunis');
        $country = $request->query->get('country', 'tn');

        try {
            // Get current weather (will use mock data if API key is invalid)
            $weatherData = $this->getCurrentWeather($request)->getContent();
            $weatherData = json_decode($weatherData, true);
            
            // Determine season based on temperature
            $temp = $weatherData['temperature']['current'] ?? 20;
            $season = $this->mockWeatherService->determineSeason($temp);
            
            try {
                // Get products for this season from the database
                $entityManager = $this->container->get('doctrine')->getManager();
                $productTypes = $entityManager->getRepository(\App\Entity\ProductType::class)
                    ->findBy(['season' => $season]);
                
                $productTypeIds = array_map(function($type) {
                    return $type->getId();
                }, $productTypes);
                
                $products = [];
                if (!empty($productTypeIds)) {
                    $products = $entityManager->getRepository(\App\Entity\Product::class)
                        ->createQueryBuilder('p')
                        ->where('p.type IN (:types)')
                        ->setParameter('types', $productTypeIds)
                        ->getQuery()
                        ->getResult();
                }
                
                // Format products
                $formattedProducts = array_map(function($product) {
                    return [
                        'id' => $product->getId(),
                        'category' => $product->getCategory(),
                        'price' => $product->getPrice(),
                        'image' => $product->getImage(),
                        'type' => [
                            'season' => $product->getType()->getSeason(),
                            'productionMethod' => $product->getType()->getProductionMethod()
                        ]
                    ];
                }, $products);
                
                return $this->json([
                    'weather' => [
                        'temperature' => $temp,
                        'determined_season' => $season
                    ],
                    'products' => $formattedProducts,
                    'is_mock' => $weatherData['is_mock'] ?? false
                ]);
            } catch (\Exception $e) {
                // Handle database exceptions
                return $this->json([
                    'weather' => [
                        'temperature' => $temp,
                        'determined_season' => $season
                    ],
                    'products' => [],
                    'error' => 'Failed to fetch products: ' . $e->getMessage(),
                    'is_mock' => $weatherData['is_mock'] ?? false
                ]);
            }
        } catch (\Exception $e) {
            // Handle any other exceptions
            return $this->json([
                'error' => 'Failed to fetch seasonal products: ' . $e->getMessage()
            ], 500);
        }
    }
} 