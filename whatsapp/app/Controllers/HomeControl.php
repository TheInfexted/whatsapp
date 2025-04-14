<?php

namespace App\Controllers;

class HomeControl extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Chain App Dev - App Landing Page',
            'meta_description' => 'Chain App Dev is an app landing page template',
            'meta_author' => 'TemplateMo'
        ];
        
        return view('index', $data);
    }
}