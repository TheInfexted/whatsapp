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
            return redirect()->to('/')->with('error', 'You must be logged in to subscribe');
        }
        
        // Verify the package exists
        $package = $this->packageModel->find($packageId);
        if (!$package) {
            return redirect()->to('/pricing')->with('error', 'Selected package not found');
        }
        
        // Get current user
        $username = session()->get('username');
        
        // Calculate amounts
        $baseAmount = $package['price'] * $package['valid_period'];
        $taxAmount = $baseAmount * 0.08;
        $totalAmount = $baseAmount + $taxAmount;
        
        // Create transaction record
        $transactionId = $this->transactionModel->createTransaction(
            $username, 
            $package['package_name'],
            $totalAmount,
            $taxAmount
        );
        
        if (!$transactionId) {
            return redirect()->to('/pricing')->with('error', 'Unable to process your subscription. Please try again.');
        }
        
        // In a real application, you would integrate with a payment gateway here
        // For this example, we'll simulate a successful payment
        $updated = $this->transactionModel->updateStatus($transactionId, 'completed');
        
        if ($updated) {
            return redirect()->to('/');
        } else {
            return redirect()->to('/pricing')->with('error', 'Unable to update transaction status. Please contact support.');
        }
    }
    
    public function cancel()
    {
        return redirect()->to('/pricing');
    }
}