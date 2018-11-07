<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::auth();

Route::get('home', 'HomeController@index')->name('home');
Route::resource('projects', 'ProjectsController');
Route::post('projects/{project}/tasks', 'ProjectTasksController@store')->name('projects.tasks.store');
Route::post('completed-tasks/{task}', 'CompletedTasksController@store')->name('completed-tasks.store');
Route::delete('completed-tasks/{task}', 'CompletedTasksController@destroy')->name('completed-tasks.destroy');

Route::resource('songs', 'SongsController');
