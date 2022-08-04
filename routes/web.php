<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\LoginController;
use App\Models\Category_product;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class,'index']);
Route::get('/register',[LoginController::class,'register']);
Route::post('/register',[LoginController::class,'daftar']);

// untuk login
Route::post('/login',[LoginController::class,'login']);

// Dashboard
Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::resource('/kategoriproduk',CategoryProductController::class);

// Route Product
Route::resource('/barang',BarangController::class);