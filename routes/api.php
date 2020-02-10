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

/*Route::apiResource('artikel','ArtikelAPIController');

Route::get('artikel','ArtikelAPIController@index');
Route::post('artikel','ArtikelAPIController@store');
Route::put('artikel/{id}','ArtikelAPIController@update');
Route::delete('artikel/{id}','ArtikelAPIController@destroy');
Route::get('artikel/{id}','ArtikelAPIController@show');
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Soal1
//Tampilkan kategori berita dengan id=40 dan dibuat oleh orang dengan email ntarihoran@siregar.org
Route::get('soal1','BabSatuController@a1');

//Soal2
//Tampilkan Artikel dengan id = 2 atau id =5
Route::get('soal2','BabSatuController@a2');

//Soal3
//Tampilkan artikel dengan id =3 dan user dengan nama =Aslijan Megantara
Route::post('soal3','BabSatuController@a3');

//Soal4
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id=269
Route::post('soal4','BabSatuController@a4');

//Soal5
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan dengan nama kategori galeri yang diawali dengan Aut
Route::put('soal5','BabDuaController@a5');

//Soal6
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga membuat berita
Route::patch('soal6','BabDuaController@a6');

//Soal7
//Tampilkan pengumuman yang dibuat oleh user yang membuat berita dan juga membuat artikel
Route::delete('soal7','BabDuaController@a7');

//Soal8
//Tampilkan user yang membuat berita, artikel, pengumuman dan galeri, beserta berita artikel pengumuman dan galerinya.
Route::post('soal8','BabDuaController@a8');

//Soal9
//Tampilkan jumlah user yang membuat artikel dan pengumuman tapi tidak pernah membuat berita.
Route::put('soal9','BabDuaController@a9');

//Soal10
//Tampilkan artikel yang dibuat oleh user yang membuat galeri dengan nama kategori galeri yang di akhiri dengan et.
Route::delete('soal10','BabDuaController@a10');
