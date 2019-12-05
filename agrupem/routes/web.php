<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController');

Route::resource('resource', 'ResourceController')->except('show');

Route::resource('novelty', 'NoveltyController');

Route::resource('event', 'EventController');
