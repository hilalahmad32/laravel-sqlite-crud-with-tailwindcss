<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProductController::class,'index'])->name('home');
Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/create',[ProductController::class,'save']);
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[ProductController::class,'update']);