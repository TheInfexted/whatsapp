<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\TransactionModel;

class SubscribeController extends BaseController
{
    protected $packageModel;
    protected $transactionModel;
    
    public function __construct()
    {
        $this->packageModel = new PackageModel();
        $this->transactionModel = new TransactionModel();
    }
    
    public function index($packageId = null)
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/');
        }
        
        // Verify the package exists
        $package = $this->packageModel->find($packageId);
        if (!$package) {
            return redirect()->to('/pricing');
        }
        
        $data = [
            'title' => 'Subscribe to ' . $package['package_name'],
            'meta_description' => 'Complete your subscription to ' . $package['package_name'],
            'meta_author' => 'Julang Network',
            'package' => $package
        ];
        
        return view('pages/subscribe', $data);
    }
    
    public function process($packageId = null)
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/');
        }
        
        // Verify the package exists
        $package = $this->packageModel->find($packageId);
        if (!$package) {
            return redirect()->to('/pricing');
        }
        
        // Get current user
        $username = session()->get('username');
        
        // Create transaction record
        $transactionId = $this->transactionModel->createTransaction(
            $username, 
            $package['package_name'],
            $package['price'] * $package['valid_period'] * 1.08,
            $package['price'] * $package['valid_period'] * 0.08 
        );
        
        if (!$transactionId) {
            return redirect()->to('/pricing');
        }
        
        // In a real application, you would integrate with a payment gateway here
        // For this example, we'll simulate a successful payment
        $this->transactionModel->updateStatus($transactionId, 'completed');
        
        return redirect()->to('/');
    }
    
    public function cancel()
    {
        return redirect()->to('/pricing');
    }
}