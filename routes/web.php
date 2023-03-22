<?php

use App\Http\Controllers\helloWorldController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', [helloWorldController::class,'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users/List',[UserController::class,'index'])->middleware('auth');
Route::delete('/users/{user}',[UserController::class,'destroy'])->middleware('auth');

Route::get('/products',[\App\Http\Controllers\ProductController::class,'index'])->name('products.index')->middleware('auth');
Route::get('/products/create',[\App\Http\Controllers\ProductController::class,'create'])->name('products.create')->middleware('auth');
Route::get('/products/{product}',[\App\Http\Controllers\ProductController::class,'show'])->name('products.show')->middleware('auth');
Route::post('/products',[\App\Http\Controllers\ProductController::class,'store'])->name('products.store')->middleware('auth');
Route::get('/products/edit/{product}',[\App\Http\Controllers\ProductController::class,'edit'])->name('products.edit')->middleware('auth');
Route::post('/products/{product}',[\App\Http\Controllers\ProductController::class,'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{product}',[\App\Http\Controllers\ProductController::class,'destroy'])->name('products.destroy')->middleware('auth');


