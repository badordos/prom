<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
//Route::get('/catalog', 'HomeController@catalog')->name('catalog');
Route::post('/callback', 'HomeController@callback')->name('callback');
