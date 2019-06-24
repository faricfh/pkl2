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

// route
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/blog-detail', function () {
    return view('frontend.blog-detail');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/blog-grid', function () {
    return view('frontend.blog-grid');
});
Route::get('/blog-list', function () {
    return view('frontend.blog-list');
});
Route::get('/category', function () {
    return view('frontend.category');
});
// end route


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('backend');
});
