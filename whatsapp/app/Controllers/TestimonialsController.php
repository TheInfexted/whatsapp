<?php

namespace App\Controllers;

class TestimonialsController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Testimonials - Q360',
            'meta_description' => 'See what our clients say about us',
            'meta_author' => 'Julang Network',
            'testimonials' => $this->getTestimonials()
        ];
        
        return view('pages/testimonials', $data);
    }
    
    private function getTestimonials()
    {
        return [
            [
                'id' => 1,
                'name' => 'B*** Y***',
                'position' => 'CEO, Financial Services',
                'date' => '30 November 2024',
                'category' => 'Financial Apps',
                'rating' => 4.8,
                'quote' => 'Incredible service! Fast, reliable, and super easy to use. I managed to send thousands of messages without any issues. Customer support is also very responsive. Highly recommended!'
            ],
            [
                'id' => 2,
                'name' => 'D*** Y***',
                'position' => 'Marketing Director',
                'date' => '29 November 2024',
                'category' => 'Digital Business',
                'rating' => 4.5,
                'quote' => 'Really happy with the overall experience. The delivery speed is great and the interface is user-friendly. A few minor improvements could make it perfect, but it\'s already way better than other services I\'ve tried.'
            ],
            [
                'id' => 3,
                'name' => 'M*** L***',
                'position' => 'Business Analyst',
                'date' => '27 August 2024',
                'category' => 'Business & Economics',
                'rating' => 4.7,
                'quote' => 'Almost flawless! I love how simple it is to upload contacts and schedule messages. The analytics feature is a big plus too. Just wish there were a few more templates to choose from.'
            ],
            [
                'id' => 4,
                'name' => 'Anonymous User',
                'position' => 'App Developer',
                'date' => '24 July 2024',
                'category' => 'New App Ecosystem',
                'rating' => 3.9,
                'quote' => 'Good but room for improvement. The system sometimes slows down during peak hours, and a few messages were delayed. Still, for the price, it\'s a pretty solid tool.'
            ],
            [
                'id' => 5,
                'name' => 'J*** B***',
                'position' => 'Web Developer',
                'date' => '18 May 2024',
                'category' => 'Web Development',
                'rating' => 4.3,
                'quote' => 'Very good service overall. Easy setup, decent message delivery rate, and fair pricing. It could use a few more customization options, but for what it offers, it\'s definitely worth it.'
            ]
        ];
    }
}