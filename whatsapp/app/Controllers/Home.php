<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'App Landing Page - Your App Name',
            'meta_description' => 'App Landing Page with all the features you need',
            'meta_author' => 'Your Name'
        ];
        
        return view('home', $data);
    }
}