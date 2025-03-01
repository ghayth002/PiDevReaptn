<?php

namespace App\Service;

class MockWeatherService
{
    /**
     * Get mock current weather data
     */
    public function getCurrentWeather(string $city = 'Tunis', string $country = 'tn'): array
    {
        // Get a random weather condition
        $weatherConditions = [
            ['main' => 'Clear', 'description' => 'clear sky', 'icon' => '01d'],
            ['main' => 'Clouds', 'description' => 'few clouds', 'icon' => '02d'],
            ['main' => 'Clouds', 'description' => 'scattered clouds', 'icon' => '03d'],
            ['main' => 'Clouds', 'description' => 'broken clouds', 'icon' => '04d'],
            ['main' => 'Rain', 'description' => 'light rain', 'icon' => '10d'],
            ['main' => 'Rain', 'description' => 'moderate rain', 'icon' => '10d'],
            ['main' => 'Thunderstorm', 'description' => 'thunderstorm', 'icon' => '11d'],
        ];
        
        $weather = $weatherConditions[array_rand($weatherConditions)];
        
        // Generate random temperature based on current month
        $month = (int)date('m');
        $baseTemp = 0;
        
        // Adjust base temperature by month (Northern Hemisphere seasons)
        if ($month >= 3 && $month <= 5) {
            // Spring
            $baseTemp = 15;
        } elseif ($month >= 6 && $month <= 8) {
            // Summer
            $baseTemp = 25;
        } elseif ($month >= 9 && $month <= 11) {
            // Fall
            $baseTemp = 10;
        } else {
            // Winter
            $baseTemp = 5;
        }
        
        // Add some randomness to the temperature
        $currentTemp = $baseTemp + mt_rand(-5, 5);
        $minTemp = $currentTemp - mt_rand(1, 3);
        $maxTemp = $currentTemp + mt_rand(1, 3);
        
        return [
            'location' => [
                'city' => $city,
                'country' => $country,
            ],
            'weather' => [
                'main' => $weather['main'],
                'description' => $weather['description'],
                'icon' => $weather['icon'],
                'icon_url' => 'https://openweathermap.org/img/wn/' . $weather['icon'] . '@2x.png',
            ],
            'temperature' => [
                'current' => $currentTemp,
                'feels_like' => $currentTemp - 1,
                'min' => $minTemp,
                'max' => $maxTemp,
            ],
            'humidity' => mt_rand(30, 90),
            'wind' => [
                'speed' => mt_rand(1, 20),
                'direction' => mt_rand(0, 359),
            ],
            'timestamp' => time(),
            'sunrise' => strtotime('today 6:00'),
            'sunset' => strtotime('today 20:00'),
            'is_mock' => true
        ];
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
} 