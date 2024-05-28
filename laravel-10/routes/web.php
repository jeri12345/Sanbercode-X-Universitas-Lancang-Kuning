<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);
Route::get('/register', [AuthController::class,'register']);
Route::post('/welcome', [AuthController::class,'welcome'])->name('welcome');
Route::get('/master', function () {
    return view('layout.master');
});
