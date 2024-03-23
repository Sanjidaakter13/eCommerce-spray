<?php

use Illuminate\Support\Facades\Route;

//Backend
use App\Http\Controllers\Backend\MainController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;



//Frontend
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CustomerController;


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

//Authentication
Route::get('/admin/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/postlogin',[UserController::class,'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {

Route::get('/admin',[MainController::class,'view'])->name('dashboard');

//Authentication
Route::get('/admin/logout',[UserController::class, 'logout'])->name('admin.logout');
Route::get('/registration/view',[UserController::class,'registration_view'])->name('registration.view');
Route::post('/doregister',[UserController::class,'doregister'])->name('doregister');


//Category
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'category_create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category/delete/{id}',[CategoryController::class,'category_delete'])->name('category.delete');
Route::get('/category/view/{id}',[CategoryController::class,'category_view'])->name('category.view');
Route::get('/category/edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'category_update'])->name('category.update');

//Product
Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
Route::get('/product/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');
Route::get('/product/view/{id}',[ProductController::class,'product_view'])->name('product.view');
Route::get('/product/edit/{id}',[ProductController::class,'product_edit'])->name('product.edit');
Route::post('/product/update/{id}',[ProductController::class,'product_update'])->name('product.update');
});




//Frontend
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/website',[HomeController::class,'view'])->name('view');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//Customer
Route::get('/customer/login',[CustomerController::class,'customer_login'])->name('customer.login');



