<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Q360 - Revolutionize Your Messaging',
            'meta_description' => 'Send smarter, scale faster with Q360 messaging platform',
            'meta_author' => 'Julang Network'
        ];
        
        return view('pages/home', $data);
    }
}