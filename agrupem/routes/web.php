<?php

use App\Http\Controllers\ContactFormController; 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/queFem', 'HomeController@queFem')->name('queFem');

Route::get('lang/{locale}', 'HomeController@lang')->name('language');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController');
Route::get('/post/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::DELETE('/post/{post}', 'PostController@destroy')->name('post.destroy')->middleware('auth');

Route::resource('resource', 'ResourceController')->except('show');
Route::get('/resource/create', 'ResourceController@create')->name('resource.create')->middleware('auth');
Route::get('/resource/{resource}/edit', 'ResourceController@edit')->name('resource.edit')->middleware('auth');
Route::DELETE('/resource/{resource}', 'ResourceController@destroy')->name('resource.destroy')->middleware('auth');

Route::resource('novelty', 'NoveltyController')->except('show');
Route::post('/novelty/deleteImage/{novelty}', 'NoveltyController@deleteImage')->name('novelty.imageDelete')->middleware('auth');
Route::get('/novelty/create', 'NoveltyController@create')->name('novelty.create')->middleware('auth');
Route::get('/novelty/{novelty}/edit', 'NoveltyController@edit')->name('novelty.edit')->middleware('auth');
Route::post('/novelty/{novelty}', 'NoveltyController@store')->name('novelty.store')->middleware('auth');
Route::DELETE('/novelty/{novelty}', 'NoveltyController@destroy')->name('novelty.destroy')->middleware('auth');

Route::get('/calendar', 'CalendarController@calendar');

Route::resource('event', 'EventController');
Route::get('/event/create', 'EventController@create')->name('event.create')->middleware('auth');
Route::post('/event/deleteImage/{event}', 'EventController@deleteImage')->name('event.imageDelete')->middleware('auth');
Route::get('/event/{event}/edit', 'EventController@edit')->name('event.edit')->middleware('auth');
Route::DELETE('/event/{event}', 'EventController@destroy')->name('event.destroy')->middleware('auth');

Route::get('contact', 'ContactFormCo/ntroller@create');
Route::post('contact', 'ContactFormController@store');
Route::get('quiSom', 'HomeController@quiSom')->name('quiSom'); 
