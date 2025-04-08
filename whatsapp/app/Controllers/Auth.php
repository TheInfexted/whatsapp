<?php

namespace App\Controllers;

class Auth extends BaseController
{
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

        // For demo purposes - normally you would check credentials against database
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Simulate successful login
        session()->set('logged_in', true);
        session()->set('username', $username);

        return redirect()->to('/')->with('message', 'Successfully logged in!');
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

        // For demo purposes - normally you would save user to database
        $fullname = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        
        // Simulate successful registration
        session()->set('logged_in', true);
        session()->set('username', $fullname);

        return redirect()->to('/')->with('message', 'Successfully registered!');
    }

    public function logout()
    {
        session()->remove(['logged_in', 'username']);
        return redirect()->to('/');
    }
}