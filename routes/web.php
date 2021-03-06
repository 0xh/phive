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

Route::resource('projects', 'Project\ProjectsController');
Route::post('projects/{project}/tasks', 'Project\ProjectTasksController@store')
    ->name('projects.tasks.store');
Route::post('completed-tasks/{task}', 'Project\CompletedTasksController@store')
    ->name('completed-tasks.store');
Route::delete('completed-tasks/{task}', 'Project\CompletedTasksController@destroy')
    ->name('completed-tasks.destroy');

Route::get('songs/export', 'Song\ExportSongsController@index')->name('songs.export');
Route::post('songs/import', 'Song\ImportSongsController@store')->name('songs.import');
Route::resource('songs', 'Song\SongsController');
