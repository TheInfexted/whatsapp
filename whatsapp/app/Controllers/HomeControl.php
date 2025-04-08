<?php

namespace App\Controllers;

class HomeControl extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'App Landing Page - Your App Name',
            'meta_description' => 'App Landing Page with all the features you need',
            'meta_author' => 'Your Name'
        ];
        
        return view('index', $data);
    }
}