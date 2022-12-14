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

/*
 * Регистрация, вход в ЛК, восстановление пароля
 */

Route::get('/', function () {
    return view('main');
})->name('/');


Route::group([
    'as' => 'auth.', // имя маршрута, например auth.index
    'prefix' => 'auth', // префикс маршрута, например auth/index
], function () {
    // форма регистрации
    Route::get('register', 'Auth\RegisterController@register')
        ->name('register');

    // создание пользователя
    Route::post('register', 'Auth\RegisterController@create')
        ->name('create');

    // форма входа
    Route::get('login', 'Auth\LoginController@login')
        ->name('login');

    // аутентификация
    Route::post('login', 'Auth\LoginController@authenticate')
        ->name('auth');

    // выход
    Route::get('logout', 'Auth\LoginController@logout')
        ->name('logout');
});
