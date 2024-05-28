<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('layout.master');
});
Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/tabel', [HomeController::class, 'tables']);

Route::get('/data-tabel', [HomeController::class, 'data']);
