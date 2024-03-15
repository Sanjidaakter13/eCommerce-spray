<?php

use Illuminate\Support\Facades\Route;

//Backend
use App\Http\Controllers\Backend\MainController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;



//Frontend
use App\Http\Controllers\Frontend\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



//Backend
Route::get('/',[MainController::class,'view'])->name('view');

Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'category_create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');

Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');



//Frontend
Route::get('/home',[HomeController::class,'view'])->name('view');

