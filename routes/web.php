<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
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

/**
 * 1. Главная страница
 * 2. Страница категорий
 * 3. Страница новостей
 * 4. Страница конкретной новости
 * 5. Страница комментариев
 */


Route::get('/', [IndexController::class, 'index']);

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/categories/{category}', [CategoryController::class, 'index'])->name('categories.show');
