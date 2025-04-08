<?php

namespace App\Controllers;

class Newsletter extends BaseController
{
    public function subscribe()
    {
        // Validate the form input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Return with validation errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // For demo purposes - normally you would save email to database
        $email = $this->request->getPost('email');
        
        // Simulate successful subscription
        return redirect()->to('/#newsletter')->with('message', 'Successfully subscribed to newsletter!');
    }
}