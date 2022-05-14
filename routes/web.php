<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login',[TestUserController::class,'login']);
Route::get('/register',[TestUserController::class,'register']);
Route::POST('/loginpost',[TestUserController::class,'loginPost']);
Route::POST('/registerpost',[TestUserController::class,'registerPost']);
Route::get('/dashboard',[TestUserController::class,'index']);
Route::get('/logout',[TestUserController::class,'logout']);
Route::get('/forgotpassword',[TestUserController::class,'forgotPassword']);
Route::post('/forgotpasswordpost',[TestUserController::class,'forgotPasswordPost']);



Route::resource('products',ProductController::class);




