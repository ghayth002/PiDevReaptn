<?php

namespace App\Service;

use Symfony\Component\Notifier\ChatterInterface;
use Symfony\Component\Notifier\Message\ChatMessage;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Recipient\Recipient;

class NotificationService
{
    private $notifier;
    private $chatter;
    private $mockWeatherService;

    public function __construct(
        NotifierInterface $notifier = null, 
        ChatterInterface $chatter = null,
        MockWeatherService $mockWeatherService
    ) {
        $this->notifier = $notifier;
        $this->chatter = $chatter;
        $this->mockWeatherService = $mockWeatherService;
    }

    /**
     * Send a notification about current weather conditions
     */
    public function sendWeatherAlert(string $city, string $country, string $email = null): void
    {
        // Get current weather data
        $weatherData = $this->mockWeatherService->getCurrentWeather($city, $country);
        
        // Determine if weather conditions warrant an alert
        $shouldAlert = $this->shouldSendWeatherAlert($weatherData);
        
        if (!$shouldAlert) {
            return;
        }
        
        $temperature = $weatherData['temperature']['current'];
        $condition = $weatherData['weather']['main'];
        $description = $weatherData['weather']['description'];
        
        // Create notification message
        $subject = "Weather Alert for $city, $country";
        $content = "Current conditions: {$temperature}°C, $condition ($description)";
        
        if ($temperature > 30) {
            $content .= "\n⚠️ High temperature alert! Stay hydrated and protect your crops from heat stress.";
        } elseif ($temperature < 5) {
            $content .= "\n❄️ Low temperature alert! Protect sensitive crops from frost.";
        }
        
        if ($condition === 'Rain' || $condition === 'Thunderstorm') {
            $content .= "\n☔ Precipitation alert! Consider postponing outdoor agricultural activities.";
        }
        
        // Send notification
        $this->sendNotification($subject, $content, $email);
    }
    
    /**
     * Send a notification about seasonal products
     */
    public function sendSeasonalProductAlert(array $products, string $season, string $email = null): void
    {
        if (empty($products)) {
            return;
        }
        
        // Create notification message
        $subject = "Seasonal Products Alert: $season Season";
        $content = "Here are some recommended products for the $season season:\n";
        
        foreach ($products as $index => $product) {
            if ($index >= 5) {
                $content .= "... and more!";
                break;
            }
            $content .= "- {$product['category']} ({$product['price']} DT)\n";
        }
        
        $content .= "\nVisit our shop to see all seasonal products!";
        
        // Send notification
        $this->sendNotification($subject, $content, $email);
    }
    
    /**
     * Send a general notification
     */
    private function sendNotification(string $subject, string $content, string $email = null): void
    {
        // If email is provided and notifier is available, send email notification
        if ($email && $this->notifier) {
            $notification = (new Notification($subject, ['email']))
                ->content($content);
            
            $recipient = new Recipient($email);
            
            $this->notifier->send($notification, $recipient);
        }
        
        // If chatter is available, send chat notification (e.g., Telegram)
        if ($this->chatter) {
            $chatMessage = new ChatMessage($subject . "\n\n" . $content);
            
            // You can add emoji to make the message more visually appealing
            $chatMessage->subject('🌦️ ' . $subject);
            
            $this->chatter->send($chatMessage);
        }
    }
    
    /**
     * Determine if weather conditions warrant sending an alert
     */
    private function shouldSendWeatherAlert(array $weatherData): bool
    {
        $temperature = $weatherData['temperature']['current'];
        $condition = $weatherData['weather']['main'];
        
        // Alert for extreme temperatures
        if ($temperature > 30 || $temperature < 5) {
            return true;
        }
        
        // Alert for severe weather conditions
        if (in_array($condition, ['Thunderstorm', 'Rain', 'Snow', 'Tornado'])) {
            return true;
        }
        
        return false;
    }
} 