<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});


Route::get('blog', function () {
	return view('blog');
});

Route::get('regis',function(){
    return view('regis');
});


Route::get('menu',function(){
    return view('menu');
});

//pertemuan 4
Route::get('dosen', 'App\Http\controllers\DosenController@index');
//oper data dari route ke controller menggunkan route yang megarah ke controller
//menggunakan fungsi method index pada controller
Route::get('math', 'App\Http\controllers\DosenController@bilanga_math');


//pertemuan 5
Route::get('/pegawai/{nama}', 'App\Http\controllers\PegawaiController@index');


Route::get('/formulir', 'App\Http\controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\controllers\PegawaiController@proses');
