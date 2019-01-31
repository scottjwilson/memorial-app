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
    	$message = new Message();
    	$message->title = request('title');
    	$message->description = request('description');

    	$message->save();

    	return redirect('/messages');

    }

    public function show($id)
    {
        return $id;
    }

    public function edit($id)
    {

    	$message = Message::find($id);
    	return view('messages.edit', compact('message'));
    }

    public function update($id)
    {
       	$message = Message::find($id);
    	$message->title = request('title');
    	$message->description = request('description');

    	$message->save();

    	return redirect('/messages');
    }
}
