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

// Jawaban
Route::get('/', function() { // menampilkan erd yang dibuat
    return view('erd');
});
Route::get('/artikel', 'ArticleController@getTitles'); // menampilkan daftar artikel
Route::get('/artikel/create', 'ArticleController@create'); // menampilkan form menambahkan artikel
Route::post('/artikel', 'ArticleController@new'); // mengirim data dari form
Route::get('/artikel/{id}', 'ArticleController@getById'); // halaman show
Route::get('/artikel/{id}/edit', 'ArticleController@edit'); // halaman form edit artikel
Route::put('/artikel/{id}', 'ArticleController@renew'); // mengirim data artikel yang baru
Route::delete('/artikel/{id}', 'ArticleController@destroy'); // menghapus artikel
