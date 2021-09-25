<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ImageUploadController;


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




Route::group(['middleware' => 'is.admin'], function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

   // Route::resource('product', ProductController::class);

    
    Route::get('product/create', [ProductController::class,'create'])->name('admin.product.create');
    Route::post('product/create', [ProductController::class,'store'])->name('admin.product.store');
    Route::get('product/edit/{id}', [ProductController::class,'edit'])->name('admin.product.edit');
    Route::post('product/update/{id}', [ProductController::class,'update'])->name('admin.product.update');
    Route::get('product/show/{id}', [ProductController::class, 'show'])->name('admin.product.show');  // declare new style of route 
    Route::get('product/list', [ProductController::class,'index'])->name('admin.product.list');
    Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');

    

    Route::get('user/create', 'App\Http\Controllers\Admin\UserController@showRegisterForm')->name('admin.user.create');
    Route::post('user/create', 'App\Http\Controllers\Admin\UserController@storeUser');
    Route::get('user/list', 'App\Http\Controllers\Admin\UserController@getlist')->name('admin.user.list');
    
 
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');  // declare new style of route 
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');  // declare new style of route 

    
});


//handle upload image  

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');






