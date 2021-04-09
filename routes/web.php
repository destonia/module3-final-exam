<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\admin\ProductsController::class,'index'])->name('index');
Route::get('/product-create',[\App\Http\Controllers\admin\ProductsController::class,'create'])->name('product.create');
Route::post('/product-store',[\App\Http\Controllers\admin\ProductsController::class,'store'])->name('product.store');
Route::post('/product-delete',[\App\Http\Controllers\admin\ProductsController::class,'delete'])->name('product.delete');

