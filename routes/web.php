<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/banjarku', [HomeController::class, 'index']);
Route::get('/food', [HomeController::class, 'food']);
Route::get('/culture', [HomeController::class, 'culture']);
Route::get('/soto', [HomeController::class, 'soto']);
Route::get('/ketupat', [HomeController::class, 'ketupat']);
Route::get('/sasirangan', [HomeController::class, 'sasirangan']);
Route::get('/ulin', [HomeController::class, 'ulin']);
