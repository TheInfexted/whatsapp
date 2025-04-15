<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About Us - Q360',
            'meta_description' => 'Learn about our mission and values',
            'meta_author' => 'Julang Network',
            'features' => $this->getFeatures()
        ];
        
        return view('pages/about', $data);
    }
    
    private function getFeatures()
    {
        return [
            [
                'title' => 'Maintenance Problems',
                'description' => 'We quickly diagnose and fix system issues to ensure your services stay online without disruption.'
            ],
            [
                'title' => '24/7 Support & Help',
                'description' => 'Our expert team is available around the clock to assist you with any questions or urgent problems.'
            ],
            [
                'title' => 'Fixing Issues About',
                'description' => 'We handle troubleshooting for software, hardware, and network errors to keep your operations running smoothly.'
            ],
            [
                'title' => 'Co. Development',
                'description' => 'Partner with us for collaborative solutions that drive innovation, streamline workflows, and boost your business.'
            ]
        ];
    }
}