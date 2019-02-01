<?php

namespace App\Http\Controllers;
use App\Message;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
    	$messages = Message::all();
    	return view('messages.index', compact('messages'));
    }

    public function create()
    {
    	return view('messages.create');
    }

    public function store()
    {
    	$validated = request()->validate([
    		'title' => ['required', 'min:3'],
    		'description' => ['required', 'min:5'],
    	]);

    	Message::create($validated);
   	
    	return redirect('/messages');
    }

    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    public function edit(Message $message)
    {
    	return view('messages.edit', compact('message'));
    }

    public function update(Message $message)
    {
    	$message->update(request(['title','description']));

    	return redirect('/messages');
    }

    public function destroy(Message $message)
    {
    	$message->delete();

    	return redirect('/messages');
    }
}
