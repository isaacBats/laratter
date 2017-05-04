<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show ($id)
    {
    	$message = Message::find($id);
    	return view('messages.show', compact('message'));
    }
}
