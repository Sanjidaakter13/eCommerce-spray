<?php

use Illuminate\Support\Facades\Route;

//Backend
use App\Http\Controllers\Backend\MainController;
use App\Http\Controllers\Backend\CategoryController;


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



//Main
Route::get('/',[MainController::class,'view'])->name('view');
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'category_create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');



//Frontend
Route::get('/home',[HomeController::class,'view'])->name('view');

