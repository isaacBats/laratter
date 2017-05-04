<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show (Message $message)
    {
    	return view('messages.show', compact('message'));
    }

    public function create (Request $request)
    {
    	$this->validate($request, [
    		'message' => 'required'
    	]);
    	
    	return 'Creado!!';
    }
}
