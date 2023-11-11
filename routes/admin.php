<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::namespace('admin')->group(function () {
    Route::get('/',[MainController::class,'homepage'])->name('admin.homepage');


    Route::get('/login',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
    Route::post('/login',[LoginController::class,'adminLogin'])->name('admin.login');
    Route::get('/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
    Route::post('/register',[RegisterController::class,'createAdmin'])->name('admin.register');



});
