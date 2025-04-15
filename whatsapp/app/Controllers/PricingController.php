<?php

namespace App\Controllers;

use App\Models\PackageModel;

class PricingController extends BaseController
{
    protected $packageModel;
    
    public function __construct()
    {
        $this->packageModel = new PackageModel();
    }
    
    public function index()
    {
        // Get packages from database instead of hardcoded array
        $packages = $this->packageModel->getActivePackages();
        
        // Format packages for the view
        $formattedPackages = [];
        foreach ($packages as $package) {
            // Parse features from package description (assuming comma-separated list)
            $features = [];
            if (!empty($package['package_desc'])) {
                $features = array_map('trim', explode(',', $package['package_desc']));
            }
            
            $formattedPackages[] = [
                'id' => $package['package_id'],
                'name' => $package['package_name'],
                'price' => 'RM' . number_format($package['price'], 0),
                'raw_price' => $package['price'],
                'valid_period' => $package['valid_period'], // Duration in months
                'is_featured' => ($package['package_id'] % 2 == 0), // Just for styling (even IDs are featured)
                'features' => $features
            ];
        }
        
        $data = [
            'title' => 'Pricing Plans - Q360',
            'meta_description' => 'Affordable pricing plans for all your messaging needs',
            'meta_author' => 'Julang Network',
            'plans' => $formattedPackages
        ];
        
        return view('pages/pricing', $data);
    }
}