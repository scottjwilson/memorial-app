@extends('layouts.app')
@section('title', '{{ $Message->title }}')

@section('content')
	
	<h1 class="mb-4">
		{{ $message->title }}
	</h1>
	
	<p class="mb-4"> 
		{{ $message->description }} 
	</p>
	
	<div>
		<a class="no-underline" href="{{ $message->id }}/edit">
			Edit
		</a>
	</div>
	{{-- @foreach ($messages as $message)
		<h3 class="mb-4">{{ $message->title }}</h3>
		<p class="mb-4">{{ $message->description }}</p>
	@endforeach
	<button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded"><a class="text-white no-underline" href="/messages/create">New Message</a></button> --}}

@endsection