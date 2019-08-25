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
    }
);
Route::resource('siswa', 'Api\SiswaController');
Route::resource('kategori', 'Api\KategoriController');
Route::resource('artikel', 'Api\ArtikelController');
Route::resource('tag', 'Api\TagController');

// Route::resource('category', 'FrontendController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy','blogdetail','category']
// ]);
