<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;



// Route::get('/', [TestController::class,'index'])->name("Home");

// Route::get('/about', [TestController::class,'about'])->name("About");

Route::get('/', [PostController::class,'index'])->name("home");
Route::resource('posts',PostController::class);

// Route::get('/about', [PostController::class,'about'])->name("About");