<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'password', 'email', 'mobile_no'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_date';
    protected $updatedField  = 'modified_date';

    // Validation
    protected $validationRules    = [
        'username' => 'required|alpha_numeric_space|min_length[3]|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]',
    ];
    
    protected $validationMessages = [
        'username' => [
            'required' => 'Username is required',
            'is_unique' => 'Username already exists'
        ],
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Please check the email field. It does not appear to be valid',
            'is_unique' => 'Email already exists'
        ],
    ];

    protected $skipValidation = false;

    /**
     * Find user by username or email
     *
     * @param string $usernameOrEmail
     * @return array|null
     */
    public function findByUsernameOrEmail(string $usernameOrEmail)
    {
        return $this->where('username', $usernameOrEmail)
                    ->orWhere('email', $usernameOrEmail)
                    ->first();
    }
}