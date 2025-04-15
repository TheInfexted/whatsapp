<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact Us - Q360',
            'meta_description' => 'Get in touch with our team',
            'meta_author' => 'Julang Network'
        ];
        
        return view('pages/contact', $data);
    }
    
    public function send()
    {
        // Form validation
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email',
            'message' => 'required'
        ]);
        
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        
        // Process the form submission
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject') ?? 'Contact Form Submission';
        $message = $this->request->getPost('message');
        
        // In a real application, you would send an email here
        // For now, we'll just redirect with a success message
        
        return redirect()->to('contact')->with('message', 'Thank you for your message. We will get back to you shortly.');
    }
}