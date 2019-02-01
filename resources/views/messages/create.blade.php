@extends('layouts.app')
@section('title', 'Create a New Message')


@section('content')
	<h1 class="mb-6">Create New Message</h1>
	

	<form method="POST" action="/messages" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
		@csrf

		<div class="mb-4">
			<label for="title" class="block text-grey-darker text-sm font-bold mb-2">Title</label>
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('title') ? 'border-red' : '' }}" type="text" name="title" placeholder="Message Title" value="{{ old('title') }}">
		</div>

		<div class="mb-6">
			<label for="description" class="block text-grey-darker text-sm font-bold mb-2">Description</label>
			<textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline {{ $errors->has('title') ? 'border-red' : '' }}" name="description" placeholder="What would you like to tell Sean?">{{ old('description') }}</textarea>
		</div>

		<div class="mb-4">
			<button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded"type="submit">Submit Message</button>
		</div>
		
		@if ($errors->any())
			<div class="bg-orange-l  ightest border-l-4 border-orange text-orange-dark p-4" role="alert">
			  <p class="mb-1 font-bold">Sorry...</p>
			  @foreach ($errors->all() as $error)
			  <p class="mb-1">{{ $error }}</p>
			  @endforeach
			</div>
		@endif

	</form>

@endsection