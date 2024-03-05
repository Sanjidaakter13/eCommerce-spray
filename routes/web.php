<?php

use Illuminate\Support\Facades\Route;

//Backend
use App\Http\Controllers\Backend\MainController;


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


//Frontend
Route::get('/home',[HomeController::class,'view'])->name('view');

