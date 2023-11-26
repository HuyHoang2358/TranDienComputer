<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FileManager;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::namespace('admin')->group(function () {
    Route::get('/',[MainController::class,'homepage'])->name('admin.homepage');

    // Account manager
    Route::get('/login',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
    Route::post('/login',[LoginController::class,'adminLogin'])->name('admin.login');
    Route::get('/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
    Route::post('/register',[RegisterController::class,'createAdmin'])->name('admin.register');

    // Category manager
    Route::group(['prefix'=>'category'],function() {
        Route::get('/', [CategoryController::class,'index'])->name('admin.category.index');
        Route::get('/add', [CategoryController::class,'add'])->name('admin.category.add');
        Route::post('/add', [CategoryController::class,'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('admin.category.edit');
        Route::post('/edit/{id}', [CategoryController::class,'update'])->name('admin.category.update');
        Route::get('/delete/{id}', [CategoryController::class,'destroy'])->name('admin.category.delete');
    });
    // Category manager
    Route::group(['prefix'=>'media'],function() {
        Route::get('/', [FileManager::class,'index'])->name('admin.fileManager.index');
    });


});
