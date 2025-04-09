<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        // Validate the form input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Return with validation errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Get input from the form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Find user by username or email
        $user = $this->userModel->findByUsernameOrEmail($username);
        
        // Verify credentials
        if ($user && password_verify($password, $user['password'])) {
            // Set user session data
            session()->set([
                'logged_in' => true,
                'user_id' => $user['user_id'],
                'username' => $user['username'],
                'email' => $user['email']
            ]);

            return redirect()->to('/')->with('message', 'Successfully logged in!');
        }
        
        // Login failed
        return redirect()->back()->withInput()->with('error', 'Invalid username/email or password');
    }

    public function register()
    {
        // Validate the form input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'fullname' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Return with validation errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Get input from the form
        $fullname = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare user data
        $userData = [
            'username' => $fullname, // Using fullname as username
            'email' => $email,
            'password' => $hashedPassword
        ];
        
        // Attempt to save the user
        if ($this->userModel->save($userData)) {
            // Get the inserted user
            $user = $this->userModel->where('email', $email)->first();
            
            // Set user session data
            session()->set([
                'logged_in' => true,
                'user_id' => $this->userModel->getInsertID(),
                'username' => $fullname,
                'email' => $email
            ]);
            
            return redirect()->to('/')->with('message', 'Successfully registered! Welcome to our app.');
        }
        
        // Registration failed
        return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
    }

    public function logout()
    {
        session()->remove(['logged_in', 'user_id', 'username', 'email']);
        return redirect()->to('/')->with('message', 'You have been logged out successfully.');
    }
}