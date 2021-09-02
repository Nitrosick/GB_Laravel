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

Route::get('/user/{username}', function (string $username) {
    return "Добро пожаловать в мой проект, {$username}";
});

Route::get('/info', function () {
    return "Здесь будет располагаться информация о будущем проекте.";
});

Route::get('/news/{news_id}', function (int $news_id) {
    return "Новость под идентификатором - {$news_id}";
});

Route::get('/news', function () {
    return "Здесь будет располагаться список всех новостей сайта";
});
