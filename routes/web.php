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
    return view('modal');
})->name('modal');

Route::get('form_log', function () {
    return view('form_log');
})->name('form_log');

Route::get('form_reg', function () {
    return view('form_reg');
})->name('form_reg');
