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

    // Validation
    protected $validationRules    = [
        'username'      => 'required|is_not_unique[users.username]',
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
            'actual_amount' => $amount + $charges,
            'payment_status' => 'pending'
        ];
        
        return $this->insert($data);
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
        return $this->update($transactionId, ['payment_status' => $status]);
    }
}