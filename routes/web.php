<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/element', function () {
    return view('element');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('backend');
});
