<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController');

Route::resource('resources', 'ResourceController');

Route::resource('novelty', 'NoveltyController');

Route::GET('noveltyES', 'NoveltyController@indexES');
Route::resource('event', 'EventController');
