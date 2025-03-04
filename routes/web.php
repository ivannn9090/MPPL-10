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

Route::get('/dashboard', function () {
    return view('dashboard.home.main');
});
Route::get('/pinjaman', function () {
    return view('dashboard.pinjaman.pinjam');
});
Route::get('/akun', function () {
    return view('dashboard.akun.data');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('main');
});
