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

Route::get('/', function () {
    $links['https://laravel.com/docs'] ='Documentation';
    $links['https://laracasts.com'] ='Laracasts';
    $links['https://laravel-news.com'] ='News';
    $links['https://forge.laravel.com'] ='Forge';
    $links['https://github.com/laravel/laravel'] ='GitHub';
    $links['https://about.me/idanibat'] = 'Isaac Batista';
    $teacher = 'Guido Contreras Woda';
    return view('welcome', compact('links', 'teacher'));
});

Route::get('/acerca', function () {
    return view('about');
});
