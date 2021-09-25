<?php

use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () { return view('account.index'); });

// Авторизация
Route::group(['middleware' => 'auth'], function() {
    Route::get('/account', AccountController::class)
        ->name('account');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    // Админка
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function() {
        Route::resource('news', AdminNewsController::class);
        Route::resource('categories', AdminCategoriesController::class);
        Route::resource('users', AdminUserController::class);
    });
});

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
Route::resource('feedback', FeedbackController::class);

// Форма получения данных
Route::resource('request', UserRequestController::class);

// Страница о проекте
Route::get('/about', [WelcomeController::class, 'index'])
    ->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
