<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product', [ProductController::class,'newProduct'])->name('product.newproduct');
Route::get('product/{product}/edit', [ProductController::class , 'Edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'Update'])->name('product.update');
Route::delete('product/{product}/delete',[ProductController::class, 'Delete'])->name('product.delete');
