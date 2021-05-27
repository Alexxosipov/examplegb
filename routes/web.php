<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index', [
    'age' => 20
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/news')->middleware('example:admin')->group(function(){
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/create', [NewsController::class, 'store'])->name('news.store');
    Route::get('/{news}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/{news}/update', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/{news}/update', [NewsController::class, 'update'])->name('news.update');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

Route::get('/parser', [\App\Http\Controllers\XmlParserController::class, 'index']);

require __DIR__.'/auth.php';
