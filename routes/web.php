<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/register');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');


