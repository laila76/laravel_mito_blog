<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TestController::class,'index'])->name("Home");

Route::get('/about', [TestController::class,'about'])->name("About");