<?php

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Our Services - Q360',
            'meta_description' => 'Discover our range of messaging services',
            'meta_author' => 'Julang Network',
            'services' => $this->getServices()
        ];
        
        return view('pages/services', $data);
    }
    
    public function details($id)
    {
        // Get service details based on ID
        $service = $this->getServiceDetails($id);
        
        if (!$service) {
            return redirect()->to('/services')->with('error', 'Service not found');
        }
        
        $data = [
            'title' => $service['name'] . ' - Q360 Services',
            'service' => $service,
            'meta_description' => $service['short_description'],
            'meta_author' => 'Julang Network'
        ];
        
        return view('pages/service_details', $data);
    }
    
    private function getServices()
    {
        return [
            [
                'id' => 1,
                'name' => 'API Support',
                'short_description' => 'Unlock powerful connectivity with our robust API support. Easily integrate our messaging platform into your existing systems and workflows.',
                'icon' => 'service-icon-01.png',
                'class' => 'first-service'
            ],
            [
                'id' => 2,
                'name' => 'Rocket Speed of App',
                'short_description' => 'Lightning-fast performance with minimal load times',
                'icon' => 'service-icon-02.png',
                'class' => 'second-service'
            ],
            [
                'id' => 3,
                'name' => 'Multiple Devices Support',
                'short_description' => 'We provide the option of adding up to 10 Devices per routing in one account to provide you with better work efficiency.',
                'icon' => 'service-icon-03.png',
                'class' => 'third-service'
            ],
            [
                'id' => 4,
                'name' => '24/7 Help & Support',
                'short_description' => 'Round-the-clock assistance from our dedicated support team',
                'icon' => 'service-icon-04.png',
                'class' => 'fourth-service'
            ]
        ];
    }
    
    private function getServiceDetails($id)
    {
        $services = [
            1 => [
                'id' => 1,
                'name' => 'API Support',
                'short_description' => 'Powerful connectivity, Robust API Support, Easy integration.',
                'description' => 'Unlock powerful connectivity with our robust API support. Easily integrate our messaging platform into your existing systems and workflows.',
                'icon' => 'service-icon-01.png',
                'class' => 'first-service',
                'features' => [
                    'Send and schedule WhatsApp messages via API',
                    'Support for text, image, video, and document messages',
                    'Webhook support for message status updates (sent, delivered, read)',
                    'Secure API authentication with token-based access',
                    'Detailed API documentation and usage examples',
                    'Message queue management and delivery tracking',
                    'Multi-user and device management through API',
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Rocket Speed of App',
                'short_description' => 'Lightning-fast performance with minimal load times',
                'description' => 'Experience lightning-fast performance with our app optimization designed for minimal load times and maximum efficiency. We fine-tune every aspect of your application to ensure it runs at peak performance.',
                'icon' => 'service-icon-02.png',
                'class' => 'second-service',
                'features' => [
                    'Code optimization',
                    'Asset compression',
                    'CDN integration',
                    'Caching strategies',
                    'Database query optimization'
                ]
            ],
            3 => [
                'id' => 3,
                'name' => 'Multiple Devices Support',
                'short_description' => 'Up to 10 Devices per account for better efficiency.',
                'description' => 'We provide the option of adding up to 10 Devices per routing in one account to provide you with better work efficiency.',
                'icon' => 'service-icon-03.png',
                'class' => 'third-service',
                'features' => [
                    'Simultaneous message sending across multiple devices',
                    'Real-time synchronization between devices',
                    'Shared access for team collaboration on campaigns',
                    'Easy management of multiple user profiles and devices',
                    'Device-level message tracking and analytics',
                    'Scalable infrastructure to support growing teams and workflows',
                    'Seamless integration with team management tools'
                ]
            ],
            4 => [
                'id' => 4,
                'name' => '24/7 Help & Support',
                'short_description' => 'Round-the-clock assistance from our dedicated support team',
                'description' => 'Get round-the-clock assistance from our dedicated support team — whenever you need help, we\'re just a message away. Our experienced support staff is available 24/7 to address any issues.',
                'icon' => 'service-icon-04.png',
                'class' => 'fourth-service',
                'features' => [
                    'Live chat support',
                    'Email ticketing system',
                    'Emergency hotline',
                    'Priority issue resolution',
                    'Regular maintenance reports'
                ]
            ]
        ];
        
        return $services[$id] ?? null;
    }
}