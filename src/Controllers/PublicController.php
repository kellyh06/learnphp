<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $posts = [
            [
                'title' => 'World news 1',
                'published' => '16.09.2025',
                'author' => 'Alice',
                'body' => 'This is the excerpt for World news 1.'
            ],

            [
                'title' => 'World news 2',
                'published' => '15.09.2025',
                'author' => 'Kelly',
                'body' => 'This is the best place to relive stress.'
            ],

            [
                'title' => 'World news 3',
                'published' => '14.09.2025',
                'author' => 'Sebastian',
                'body' => 'There are the craziest animals.'
            ],

            [
                'title' => 'World news 4',
                'published' => '13.09.2025',
                'author' => 'Pets',
                'body' => 'This is the World news 4.'
            ],

        ];
        view('index', compact('posts'));
    }
    public function us()
    {
        $posts = [
            [
                'title' => 'US news 1',
                'published' => '16.09.2025',
                'author' => 'Nikita',
                'body' => 'This is the biggest hit.'
            ],

            [
                'title' => 'US news 2',
                'published' => '15.09.2025',
                'author' => 'Aleks',
                'body' => 'This is always the best trick.'
            ],

            [
                'title' => 'US news 3',
                'published' => '14.09.2025',
                'author' => 'Lylia',
                'body' => 'This might be illegal.'
            ],

            [
                'title' => 'US news 4',
                'published' => '13.09.2025',
                'author' => 'Morgan',
                'body' => 'Say no to this.'
            ],

        ];


        view('us', compact('posts'));
    }
}
