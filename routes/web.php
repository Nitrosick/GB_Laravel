<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\InfoController;
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

Route::get('/', function () { return view('welcome/index'); });

// Админка
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('news', AdminNewsController::class);
    Route::resource('users', AdminUserController::class);
});

// Страница приветствия
Route::get('/welcome', [WelcomeController::class, 'index'])
    ->name('welcome');

// Страница категорий
Route::get('/categories', [CategoriesController::class, 'index'])
    ->name('categories');

// Страница новостей конкретной категории
Route::get('/news/{category_id}', [NewsController::class, 'newsByCategory'])
    ->where('category_id', '\d+')
	->name('news_by_cat');

// Страница отдельной новости
Route::get('/single_new/{news_id}', [NewsController::class, 'newsById'])
    ->where('news_id', '\d+')
	->name('news_by_id');

// Страница добавления новости
Route::get('/news_add', [NewsController::class, 'addNews']);

// Страница обратной связи
Route::get('/feedback', [InfoController::class, 'feedback'])
    ->name('feedback');

// Форма получения данных
Route::get('/data', [InfoController::class, 'getData'])
    ->name('data');
