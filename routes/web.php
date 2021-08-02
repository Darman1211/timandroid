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
    return view('welcome');
});

//peserta
Route::get('/peserta','PesertaController@index');
Route::get('/peserta/create','PesertaController@create');
Route::post('/peserta/store','PesertaController@store');
Route::get('/peserta/edit/{id}','PesertaController@edit');
Route::put('/peserta/update/{id}','PesertaController@update');
Route::get('/peserta/hapus/{id}','PesertaController@hapus');

//cari
Route::get('/peserta/cari','PesertaController@cari');

//kelas
Route::get('/kelas','KelasController@index');
Route::get('/kelas/inputkelas','KelasController@create');
Route::post('/kelas/store','KelasController@store');
Route::get('/kelas/edit/{id}','KelasController@edit');
Route::put('/kelas/update/{id}','KelasController@update');
Route::get('/kelas/hapus/{id}','KelasController@hapus');

//test
Route::get('/kelas/test','KelasController@test');


//cetak sertifikat
Route::get('/cetak','CetakController@input');
Route::get('/cetak/view','CetakController@view');
Route::post('/cetak/store','CetakController@store');
Route::get('/cetak/sertifikat','CetakController@sertifikat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

