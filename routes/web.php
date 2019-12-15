<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/catalog', 'HomeController@catalog')->name('catalog');
Route::get('/catalog/{product}', 'HomeController@show')->name('product');
Route::post('/callback', 'HomeController@callback')->name('callback');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::resource('products', 'ProductsController');

    Route::get('/phpinfo', function () {
        phpinfo();
    })->name('phpinfo');
});

