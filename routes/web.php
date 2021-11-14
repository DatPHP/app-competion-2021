<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\LoginController;
use App\Http\Controllers\Customer\Auth\RegisterController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Click;


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

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');

//gắn  bộ lọc 
/*
Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
*/ 


Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');

// go bno loc  
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/filter/gender',[HomeController::class, 'productbygender']);
Route::get('/product/filter/kind',[HomeController::class, 'productbykind']);
Route::get('product/detail/{id}', [HomeController::class, 'productbyid'])->name('product.detail'); 

// gan bo loc  

/*
Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

*/ 


//bỏ bộ lọc 


//Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'storeUser']);



/*
GET/products,                      mapped to the index() method,
POST /products,                  mapped to the store() method,

GET /products/create,                mapped to the create() method,

GET /products/{contact},                      mapped to the show() method,
GET /products/{contact}/edit,                       mapped to the edit() method,
PUT/PATCH /products/{contact},                   mapped to the update() method,
DELETE /products/{contact},                        mapped to the destroy() method.
*/ 
use App\Http\Controllers\ImageuploadController;

Route::get('image-upload', [ ImageuploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageuploadController::class, 'imageUploadPost' ])->name('image.upload.post');


Route::get('check-click-event', Click::class);









