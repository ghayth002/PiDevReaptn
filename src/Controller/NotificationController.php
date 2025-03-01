<?php

namespace App\Controller;

use App\Service\NotificationService;
use App\Service\MockWeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/notifications')]
class NotificationController extends AbstractController
{
    private $notificationService;
    private $mockWeatherService;

    public function __construct(
        NotificationService $notificationService,
        MockWeatherService $mockWeatherService
    ) {
        $this->notificationService = $notificationService;
        $this->mockWeatherService = $mockWeatherService;
    }

    #[Route('/weather-alert', name: 'app_notifications_weather_alert')]
    public function weatherAlert(Request $request): Response
    {
        $city = $request->query->get('city', 'Tunis');
        $country = $request->query->get('country', 'tn');
        $email = $request->query->get('email');
        
        // Send weather alert notification
        $this->notificationService->sendWeatherAlert($city, $country, $email);
        
        // Get current weather data to display on the page
        $weatherData = $this->mockWeatherService->getCurrentWeather($city, $country);
        
        return $this->render('notification/weather_alert.html.twig', [
            'weather' => $weatherData,
            'email' => $email,
            'notification_sent' => true
        ]);
    }

    #[Route('/seasonal-products-alert', name: 'app_notifications_seasonal_products_alert')]
    public function seasonalProductsAlert(Request $request): Response
    {
        $city = $request->query->get('city', 'Tunis');
        $country = $request->query->get('country', 'tn');
        $email = $request->query->get('email');
        
        // Get current weather data
        $weatherData = $this->mockWeatherService->getCurrentWeather($city, $country);
        
        // Determine season based on temperature
        $temperature = $weatherData['temperature']['current'];
        $season = $this->mockWeatherService->determineSeason($temperature);
        
        // Get seasonal products (mock data for demonstration)
        $products = $this->getMockSeasonalProducts($season);
        
        // Send seasonal products alert notification
        $this->notificationService->sendSeasonalProductAlert($products, $season, $email);
        
        return $this->render('notification/seasonal_products_alert.html.twig', [
            'weather' => $weatherData,
            'season' => $season,
            'products' => $products,
            'email' => $email,
            'notification_sent' => true
        ]);
    }
    
    #[Route('/subscribe', name: 'app_notifications_subscribe')]
    public function subscribe(Request $request): Response
    {
        $email = $request->query->get('email');
        $submitted = $request->query->has('email');
        
        return $this->render('notification/subscribe.html.twig', [
            'email' => $email,
            'submitted' => $submitted
        ]);
    }
    
    /**
     * Get mock seasonal products for demonstration
     */
    private function getMockSeasonalProducts(string $season): array
    {
        $products = [];
        
        // Mock products for each season
        switch ($season) {
            case 'Summer':
                $products = [
                    ['category' => 'Watermelon', 'price' => 2.5],
                    ['category' => 'Tomatoes', 'price' => 3.0],
                    ['category' => 'Cucumbers', 'price' => 1.8],
                    ['category' => 'Peaches', 'price' => 4.2],
                    ['category' => 'Zucchini', 'price' => 2.0],
                    ['category' => 'Eggplant', 'price' => 2.5],
                ];
                break;
            case 'Fall':
                $products = [
                    ['category' => 'Apples', 'price' => 2.0],
                    ['category' => 'Pumpkins', 'price' => 5.0],
                    ['category' => 'Grapes', 'price' => 3.5],
                    ['category' => 'Sweet Potatoes', 'price' => 2.2],
                    ['category' => 'Figs', 'price' => 6.0],
                    ['category' => 'Pears', 'price' => 2.8],
                ];
                break;
            case 'Winter':
                $products = [
                    ['category' => 'Oranges', 'price' => 2.5],
                    ['category' => 'Potatoes', 'price' => 1.5],
                    ['category' => 'Carrots', 'price' => 1.8],
                    ['category' => 'Cabbage', 'price' => 2.0],
                    ['category' => 'Lemons', 'price' => 3.0],
                    ['category' => 'Onions', 'price' => 1.2],
                ];
                break;
            case 'Spring':
                $products = [
                    ['category' => 'Strawberries', 'price' => 4.0],
                    ['category' => 'Asparagus', 'price' => 5.5],
                    ['category' => 'Peas', 'price' => 3.0],
                    ['category' => 'Artichokes', 'price' => 4.5],
                    ['category' => 'Spinach', 'price' => 2.0],
                    ['category' => 'Radishes', 'price' => 1.5],
                ];
                break;
        }
        
        return $products;
    }
} 