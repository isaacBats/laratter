<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
    	$links['https://laravel.com/docs'] ='Documentation';
	    $links['https://laracasts.com'] ='Laracasts';
	    $links['https://laravel-news.com'] ='News';
	    $links['https://forge.laravel.com'] ='Forge';
	    $links['https://github.com/laravel/laravel'] ='GitHub';
	    $links['https://about.me/idanibat'] = 'Isaac Batista';
	    $teacher = 'Guido Contreras Woda';
	    return view('welcome', compact('links', 'teacher'));
    }

    public function about ()
    {
    	return view('about');
    }
}
