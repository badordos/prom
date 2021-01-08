<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/catalog/{type?}', 'HomeController@catalog')->name('catalog');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/catalog/{type}/{product}', 'HomeController@show')->name('product');
Route::post('/callback', 'HomeController@callback')->name('callback');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('callbacks', 'AdminController@callbacks')->name('callbacks.index');
    Route::resource('products', 'ProductsController');
    Route::resource('categories', 'CategoryController');

    Route::get('/phpinfo', function () {
        phpinfo();
    })->name('phpinfo');
    Route::get('/generateSiteMap', function () {
        \Spatie\Sitemap\SitemapGenerator::create(env('APP_URL'))->getSitemap()->writeToFile(public_path('/sitemap.xml'));
        return back();
    })->name('sitemap');
});

