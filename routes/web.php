<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second',[CategoryController::class, 'index'])->name('second');

//Route::view('/second', 'second');
