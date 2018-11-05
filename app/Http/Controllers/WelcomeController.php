<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Show the welcome page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = [
            'Documentation' => "https://laravel.com/docs",
            'Laracasts'     => "https://laracasts.com",
            'News'          => 'https://laravel-news.com',
            'Nova'          => 'https://nova.laravel.com',
            'Forge'         => 'https://forge.laravel.com',
            'GitHub'        => 'https://github.com/laravel/laravel',
        ];

        return view('welcome', ['links' => $links]);
    }
}
