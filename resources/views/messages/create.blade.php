@extends('layouts.app')
@section('title', 'Create a New Message')


@section('content')
	<h1 class="mb-6">Create New Message</h1>
	

	<form method="POST" action="/messages" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4>
		@csrf

		<div class="mb-4">
			<label for="title" class="block text-grey-darker text-sm font-bold mb-2">Title</label>
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" placeholder="Message Title">
		</div>

		<div class="mb-6">
			<label for="description" class="block text-grey-darker text-sm font-bold mb-2">Description</label>
			<textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" name="description" placeholder="What would you like to tell Sean?"></textarea>
		</div>

		<div class="mb-4">
			<button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded"type="submit">Submit Message</button>
		</div>
	</form>

@endsection