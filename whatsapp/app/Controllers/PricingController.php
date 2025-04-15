<?php

namespace App\Controllers;

class PricingController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pricing Plans - Q360',
            'meta_description' => 'Affordable pricing plans for all your messaging needs',
            'meta_author' => 'Julang Network',
            'plans' => $this->getPlans()
        ];
        
        return view('pages/pricing', $data);
    }
    
    private function getPlans()
    {
        return [
            [
                'id' => 1,
                'name' => 'Basic Plan',
                'price' => 'RM250',
                'is_featured' => true,
                'features' => [
                    '24/7 Customer Service',
                    'Custom bulk-import contact book',
                    'Blast Sending',
                    'Campaign Features',
                    'UNLIMITED Sends',
                    'Up to 5 Devices in Routing'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Professional Plan',
                'price' => 'RM500',
                'is_featured' => true,
                'features' => [
                    '24/7 Customer Service',
                    'Custom bulk-import contact book',
                    'Blast Sending',
                    'Campaign Features',
                    'UNLIMITED Sends',
                    'Up to 10 Devices in Routing'
                ]
            ]
        ];
    }
}