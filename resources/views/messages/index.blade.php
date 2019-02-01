@extends('layouts.app')
@section('title', 'Messages')


@section('content')
	<h1 class="mb-4">Messages</h1>
	
	@foreach ($messages as $message)
		<h3 class="mb-4">
			<a href="messages/{{ $message->id }}">
				{{ $message->title }}
			</a>
		</h3>

	@endforeach
	<button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded"><a class="text-white no-underline" href="/messages/create">New Message</a></button>

@endsection