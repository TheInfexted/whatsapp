<?php

namespace App\Controllers;

use App\Models\TransactionModel;

class UserController extends BaseController
{
    protected $transactionModel;
    
    public function __construct()
    {
        $this->transactionModel = new TransactionModel();
    }
    
    public function dashboard()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/')->with('error', 'You must be logged in to access your dashboard');
        }
        
        $username = session()->get('username');
        
        // Get user's transactions
        $transactions = $this->transactionModel->getUserTransactionsWithDetails($username);
        
        $data = [
            'title' => 'User Dashboard - Q360',
            'meta_description' => 'Manage your subscriptions and view transaction history',
            'meta_author' => 'Julang Network',
            'transactions' => $transactions
        ];
        
        return view('pages/user/dashboard', $data);
    }
    
    public function transactions()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/')->with('error', 'You must be logged in to view your transactions');
        }
        
        $username = session()->get('username');
        
        // Get user's transactions
        $transactions = $this->transactionModel->getUserTransactions($username);
        
        $data = [
            'title' => 'Transaction History - Q360',
            'meta_description' => 'View your transaction history',
            'meta_author' => 'Julang Network',
            'transactions' => $transactions
        ];
        
        return view('pages/user/transactions', $data);
    }
    
    public function subscription($transactionId = null)
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/')->with('error', 'You must be logged in to view your subscription');
        }
        
        // If transaction ID is provided, get details for that specific transaction
        if ($transactionId) {
            $transaction = $this->transactionModel->find($transactionId);
            
            // Check if transaction belongs to the current user
            if (!$transaction || $transaction['username'] !== session()->get('username')) {
                return redirect()->to('/user/dashboard')->with('error', 'Transaction not found');
            }
            
            $data = [
                'title' => 'Subscription Details - Q360',
                'meta_description' => 'View your subscription details',
                'meta_author' => 'Julang Network',
                'transaction' => $transaction
            ];
            
            return view('pages/user/subscription_details', $data);
        }
        
        // Otherwise redirect to dashboard
        return redirect()->to('/user/dashboard');
    }
}