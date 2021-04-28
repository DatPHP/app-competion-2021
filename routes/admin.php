<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::match(['get', 'post'], 'login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
/*
Route::middleware('auth:admin')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
});
*/ 


/* 
login 
Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});

*/


/*

Route::middleware('auth:admin')->group(function (){

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});

*/




