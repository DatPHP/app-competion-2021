<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\LoginController;
use App\Http\Controllers\Customer\Auth\RegisterController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\BlogPostController;
use App\Http\Controllers\Customer\ProductController;
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
Route::get('check', [HomeController::class, 'check'])->name('product.check'); 

Route::get('/blog/landing', [BlogPostController::class, 'landing'])->name('blog.landing');
Route::get('/blog', [BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);
Route::get('/blog/create/post', [BlogPostController::class, 'create']); //shows create post form
Route::post('/blog/create/post', [BlogPostController::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']); //commits edited post to the database 
Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']); //deletes post from the database

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



Route::get('check-click-event', Click::class);

// shooping cart 

/* 
Route::get('/', [ProductController::class, 'index']);  
*/ 

Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');






