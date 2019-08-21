<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(
    ['as' => 'api.', 'middleware' => ['cors']],
    function () {
        // Json
        Route::resource('frontend', 'Api\FrontendController');
        Route::get('singlepost/{artikel}', 'Api\FrontendController@singlepost');
        Route::get('post', 'Api\FrontendController@post');
        Route::get('post/{kategori}', 'Api\FrontendController@postkategori');
        // Route::get('blog-tag/{tag}', 'Api\FrontController@blogtag');
        // Route::get('blog-kategori/{kategori}', 'Api\FrontController@blogkategori');
        // Route::get('front', 'Api\FrontController@index')->name('json_front');
        // Route::resource('artikel', 'Api\ArtikelController');
        // Route::resource('tag', 'Api\TagController');
        // Route::resource('kategori', 'Api\KategoriController');
        // Route::resource('/produk', 'Api\ProdukController');
    }
);
Route::resource('siswa', 'Api\SiswaController');
Route::resource('kategori', 'Api\KategoriController');
Route::resource('artikel', 'Api\ArtikelController');
Route::resource('tag', 'Api\TagController');

// Route::resource('category', 'FrontendController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy','blogdetail','category']
// ]);


