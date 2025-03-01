<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService
{
    private $httpClient;
    private $apiKey;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $_ENV['OPENWEATHERMAP_API_KEY'] ?? null;
    }

    /**
     * Get current weather for a location
     */
    public function getCurrentWeather(string $city = 'Tunis', string $country = 'tn'): array
    {
        if (!$this->apiKey) {
            throw new \Exception('OpenWeatherMap API key not configured');
        }

        $response = $this->httpClient->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => "$city,$country",
                'appid' => $this->apiKey,
                'units' => 'metric'
            ]
        ]);

        return $response->toArray();
    }

    /**
     * Get weather forecast for a location
     */
    public function getForecast(string $city = 'Tunis', string $country = 'tn', int $days = 5): array
    {
        if (!$this->apiKey) {
            throw new \Exception('OpenWeatherMap API key not configured');
        }

        $response = $this->httpClient->request('GET', 'https://api.openweathermap.org/data/2.5/forecast', [
            'query' => [
                'q' => "$city,$country",
                'appid' => $this->apiKey,
                'units' => 'metric',
                'cnt' => $days * 8 // 8 forecasts per day (every 3 hours)
            ]
        ]);

        return $response->toArray();
    }

    /**
     * Determine season based on temperature
     */
    public function determineSeason(float $temperature): string
    {
        if ($temperature > 25) {
            return 'Summer';
        } elseif ($temperature > 15) {
            return 'Spring';
        } elseif ($temperature > 5) {
            return 'Fall';
        } else {
            return 'Winter';
        }
    }

    /**
     * Get weather icon URL
     */
    public function getWeatherIconUrl(string $iconCode): string
    {
        return "https://openweathermap.org/img/wn/{$iconCode}@2x.png";
    }
} 