<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table      = 'transactions';
    protected $primaryKey = 'transaction_id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'username', 
        'packages', 
        'amount', 
        'charges', 
        'actual_amount',
        'payment_status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_date';
    protected $updatedField  = '';

    // Validation
    protected $validationRules    = [
        'username'      => 'required',
        'packages'      => 'required',
        'amount'        => 'required|numeric',
        'actual_amount' => 'required|numeric',
    ];
    
    protected $validationMessages = [
        'username' => [
            'exists' => 'Username does not exist in our system'
        ],
    ];

    /**
     * Create a new transaction
     *
     * @param string $username
     * @param string $packageName
     * @param float $amount
     * @param float $charges
     * @return bool
     */
    public function createTransaction($username, $packageName, $amount, $charges = 0)
    {
        $data = [
            'username'      => $username,
            'packages'      => $packageName,
            'amount'        => $amount,
            'charges'       => $charges,
            'actual_amount' => $amount,
            'payment_status' => 'pending',
            'created_date'  => date('Y-m-d H:i:s') // Explicitly set the created_date
        ];
        
        try {
            $this->insert($data);
            return $this->insertID();
        } catch (\Exception $e) {
            log_message('error', 'Failed to create transaction: ' . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Get transactions for a user
     * 
     * @param string $username
     * @return array
     */
    public function getUserTransactions($username)
    {
        return $this->where('username', $username)
                    ->orderBy('created_date', 'DESC')
                    ->findAll();
    }
    
    /**
     * Update transaction status
     * 
     * @param int $transactionId
     * @param string $status
     * @return bool
     */
    public function updateStatus($transactionId, $status)
    {
        try {
            return $this->update($transactionId, ['payment_status' => $status]);
        } catch (\Exception $e) {
            log_message('error', 'Failed to update transaction status: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Get user transactions with package details
     * 
     * @param string $username
     * @return array
     */
    public function getUserTransactionsWithDetails($username)
    {
        return $this->select('transactions.*, packages.package_name, packages.valid_period')
                    ->join('packages', 'packages.package_name = transactions.packages', 'left')
                    ->where('transactions.username', $username)
                    ->where('transactions.payment_status', 'completed')
                    ->orderBy('transactions.created_date', 'DESC')
                    ->findAll();
    }
}