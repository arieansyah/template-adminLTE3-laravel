<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

Route::get('/', [DashboardController::class, 'index']);

Route::name('admin/')->group(static function () {
    Route::prefix('categories')->name('categories/')->group(static function () {
        // Route::get('kategori/data', 'KategoriController@listData')->name('data');
        Route::resource('/', CategoryController::class);
    });
});
