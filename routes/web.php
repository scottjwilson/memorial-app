<?php

/*
	GET /messages (index)
	GET /messages/create (create)
	GET /messages/1 (show)
	POST /messages (store)
	GET /messages/1/edit (edit)
	PATCH /messages/1
	DELETE /messages/1 (destroy)




*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/video', 'PagesController@video');

Route::resource('messages', 'MessagesController');

// Route::get('/messages', 'MessagesController@index');
// Route::post('/messages', 'MessagesController@store');
// Route::get('/messages/create', 'MessagesController@create');




// Route::get('/messages', function () {
//     return view('messages')->with([
// 		'messages'=> [
// 		'Great time in Vegas!',
// 		'Lebron is a Laker man! Who would of thought?',
// 		'Miss you bro!',
// 		'Omar Gooding looking ass!!']
// 	]);
   


