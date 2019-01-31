@extends('layouts.app')
@section('title', 'Messages')


@section('content')
	<h1>Messages</h1>
	
	@foreach ($messages as $message)
		<li>{{ $message->title }}</li>
		<p>{{ $message->description }}</p>
	@endforeach

@endsection