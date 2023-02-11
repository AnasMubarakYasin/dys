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
  return view('login');
});

Route::get('administrator', function () {
  return view('pages.administrator.dashboard');
})->name('web.administrator');

Route::get('administrator/data_pemuda', function () {
  return view('pages.administrator.data_pemuda');
})->name('web.administrator.data_pemuda');
