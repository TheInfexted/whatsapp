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
                'name' => 'App Maintenance',
                'short_description' => 'Regular updates, bug fixes, and performance optimizations',
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
                'name' => 'Multi Workflow Idea',
                'short_description' => 'Flexible, scalable workflows that adapt to your team\'s needs',
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
                'name' => 'App Maintenance',
                'short_description' => 'Regular updates, bug fixes, and performance optimizations',
                'description' => 'Our team ensures your applications run smoothly with regular updates, bug fixes, and performance optimizations. We proactively monitor your system to prevent issues before they affect your users.',
                'icon' => 'service-icon-01.png',
                'class' => 'first-service',
                'features' => [
                    'Regular software updates',
                    'Bug tracking and resolution',
                    'Performance monitoring',
                    'Security patches',
                    'Database optimization'
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
                'name' => 'Multi Workflow Idea',
                'short_description' => 'Flexible, scalable workflows that adapt to your team\'s needs',
                'description' => 'We help design flexible, scalable workflows that adapt to your team\'s needs, improving productivity across every project. Our custom solutions are designed to grow with your business.',
                'icon' => 'service-icon-03.png',
                'class' => 'third-service',
                'features' => [
                    'Custom workflow development',
                    'Process automation',
                    'Team collaboration tools',
                    'Scalable architecture',
                    'Integration with existing systems'
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