<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Modules\Page1Controller;

Route::get('register', [RegisterController::class, 'index'])->name('admin.register'); 
Route::post('register', [RegisterController::class, 'store'])->name('admin.register.post'); 
Route::get('login', [LoginController::class, 'index'])->name('admin.login'); 
Route::post('login', [LoginController::class, 'checkLogin'])->name('admin.login.post');
Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin.auth'], function () {
    // User Dashboard
    Route::get('home', [DashboardController::class, 'index'])->name('admin.home');
    Route::get('page1', [Page1Controller::class, 'index'])->name('admin.page1');
});