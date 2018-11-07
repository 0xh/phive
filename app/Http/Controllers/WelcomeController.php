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
            'Songs'     => route('songs.index'),
            'Projects' => route('projects.index'),
            'News'      => 'https://laravel-news.com',
            'Nova'      => 'https://nova.laravel.com',
            'Forge'     => 'https://forge.laravel.com',
            'GitHub'    => 'https://github.com/laravel/laravel',
        ];

        return view('welcome', ['links' => $links]);
    }
}
