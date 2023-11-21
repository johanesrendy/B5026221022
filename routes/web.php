<?php

use Illuminate\Support\Facades\Route;

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
    return view('ets');
});   

Route::get('/tugas1', function () {
    return view('tugas/tugas1-replika');
});   

Route::get('/tugas2', function () {
    return view('tugas/tugas2-linktree');
}); 

Route::get('/html1', function () {
    return view('materi/1-html-1');
}); 

Route::get('/html2', function () {
    return view('materi/1-html-2');
}); 

Route::get('/html3', function () {
    return view('materi/1-html-3');
}); 

Route::get('/html4', function () {
    return view('materi/1-html-4');
});

Route::get('/bootstrap', function () {
    return view('materi/2-bootstrap');
});

Route::get('/javascript1', function () {
    return view('materi/3-javascript-1');
});

Route::get('/javascript2', function () {
    return view('materi/3-javascript-2');
});

Route::get('/form-validate', function () {
    return view('materi/4-form-validate');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::get('pegawai', 'App\Http\Controllers\DosenController@DB');
Route::get('pegawai/tambah', 'App\Http\Controllers\DosenController@tambah');
Route::post('pegawai/store', 'App\Http\Controllers\DosenController@store');
Route::get('pegawai/edit/{id}', 'App\Http\Controllers\DosenController@edit');
Route::post('pegawai/update', 'App\Http\Controllers\DosenController@update');
Route::get('pegawai/hapus/{id}', 'App\Http\Controllers\DosenController@hapus');


