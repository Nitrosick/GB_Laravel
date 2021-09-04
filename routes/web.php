<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () { return view('welcome'); });

// Страница приветствия
Route::get('/welcome', [WelcomeController::class, 'index']);

// Страница категорий
Route::get('/categories', [CategoriesController::class, 'index']);

// Страница новостей конкретной категории
Route::get('/news/{category_id}', [NewsController::class, 'newsByCategory']);

// Страница отдельной новости
Route::get('/single_new/{news_id}', [NewsController::class, 'newsById']);

// Страница добавления новости
Route::get('/news_add', [NewsController::class, 'addNews']);

// Route::get('/user/{username}', function (string $username) {
//     return "Добро пожаловать в мой проект, {$username}";
// });
