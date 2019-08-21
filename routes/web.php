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
Route::get('/blog-list', function () {
    return view('frontend.blog-list');
});

route::get('kategori', 'FrontendController@kategori');
// route::get('post/{tag}', 'FrontendController@posttag');
route::get('post/{kategori}', 'FrontendController@postkategori');
route::get('post', 'FrontendController@post');
route::get('singlepost/', 'FrontendController@singletest');
route::get('singlepost/{artikel}', 'FrontendController@singlepost');
//end route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', function () {
//     return view('backend');
// });

Route::get('adminbackend', function () {
    return view('adminbackend');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('kategori', 'Kategori_Controller');
    Route::resource('tag', 'Tag_Controller');
    Route::resource('artikel', 'Artikel_Controller');
    Route::resource('review', 'Review_Controller');
});

