<?php

//Post section routing

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');

//Task section routing

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');

//Sesion section routing

Route::get('register', 'RegistrationController@create');

Route::post('register', 'RegistrationController@store');

Route::post('login', 'SessionController@store');

Route::get('login', 'SessionController@create');

Route::get('home', 'HomeController@index');

//Route::post('logout', 'SessionController@destroy');
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');