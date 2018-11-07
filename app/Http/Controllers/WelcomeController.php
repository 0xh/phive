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
            'Songs'     => action([Song\SongsController::class, 'index']),
            'Projects'  => action([ProjectsController::class, 'index']),
            'Telescope' => action([\Laravel\Telescope\Http\Controllers\HomeController::class, 'index']),
            'News'      => 'https://laravel-news.com',
            'Nova'      => 'https://nova.laravel.com',
            'Forge'     => 'https://forge.laravel.com',
            'GitHub'    => 'https://github.com/laravel/laravel',
        ];

        return view('welcome', ['links' => $links]);
    }
}
