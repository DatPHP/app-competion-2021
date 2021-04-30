<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;



Route::match(['get', 'post'], 'login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');



/*
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('product/create', [ProductController::class,'create'])->name('admin.product.create');
Route::get('product/{id}/edit', [ProductController::class,'edit'])->name('admin.product.edit');
Route::post('product/create', [ProductController::class,'store'])->name('admin.product.edit');
Route::get('product/list', [ProductController::class,'index'])->name('admin.product.list');
Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');  // declare new style of route 


*/ 


Route::group(['middleware' => 'is.admin'], function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('product/create', [ProductController::class,'create'])->name('admin.product.create');
    Route::get('product/{id}/edit', [ProductController::class,'edit'])->name('admin.product.edit');
    Route::post('product/create', [ProductController::class,'store'])->name('admin.product.edit');
    Route::get('product/list', [ProductController::class,'index'])->name('admin.product.list');
    Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');  // declare new style of route
});

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




