<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

// procitati o rutama i resource route
Route::get('/chat/{id}', 'MessageController@index')->middleware('auth');
Route::get('/messages', 'MessageController@show');
Route::post('/messages', 'MessageController@store');

Route::get('/users', 'UsersController@index');
Route::get('/auth', 'UsersController@show');