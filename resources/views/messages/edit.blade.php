@extends('layouts.app')

@section('content')
	<h1 class="mb-6">Edit Message</h1>
		<div class="w-full xl:max-w-sm">
			
			<form method="POST" action="/messages/{{ $message->id }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
				@method('PATCH')
				@csrf
				<div class="mb-4"> 
					<label for="title" class="block text-grey-darker text-sm font-bold mb-2">Title</label>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" name="title" type="text" placeholder="Title" value="{{ $message->title }}">
    			</div>

    			<div class="mb-6">
    				<label for="description" class="block text-grey-darker text-sm font-bold mb-2">Description</label>
    				<textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" name="description">{{ $message->description }}</textarea>
    			</div>
    			
    			<div class="mb-4">
    				<button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded">Update Message</button>
    			</div>
			</form>
			<form method="POST" action="/messages/{{ $message->id }}">
				@method('DELETE')
				@csrf
				<button type="submit" class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded">Delete Message</button>
			</form>
		</div>
@endsection