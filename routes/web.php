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

// end route


//route parameter
route::get('blog-grid/{tag}', 'FrontendController@blogtag');
route::get('blog-grid', 'FrontendController@blog');
route::get('blog-detail/{artikel}', 'FrontendController@blogdetail');
route::get('kategori', 'FrontendController@news');
route::get('kategori/{kategori}', 'FrontendController@newskategori');
route::get('kategori/blog-detail/{artikel}', 'FrontendController@blogdetail');
//end routee

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

