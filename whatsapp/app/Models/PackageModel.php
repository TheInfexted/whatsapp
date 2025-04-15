<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table      = 'packages';
    protected $primaryKey = 'package_id';

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'package_code', 
        'package_name', 
        'package_desc', 
        'price', 
        'valid_period',
        'package_status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_date';
    protected $updatedField  = 'modified_date';

    // Validation
    protected $validationRules    = [
        'package_code'  => 'required|alpha_numeric_space|min_length[3]',
        'package_name'  => 'required|alpha_numeric_space|min_length[3]',
        'price'         => 'required|numeric',
        'valid_period'  => 'required|integer',
    ];

    /**
     * Get active packages
     *
     * @return array
     */
    public function getActivePackages()
    {
        return $this->where('package_status', 'active')
                    ->orderBy('price', 'ASC')
                    ->findAll();
    }

    /**
     * Get a specific package by ID
     *
     * @param int $id
     * @return array|null
     */
    public function getPackage($id)
    {
        return $this->find($id);
    }
}