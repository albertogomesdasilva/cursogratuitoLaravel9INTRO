<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/', function(){
    return view('welcome');
});


Route::get('user/{user?}', [UserController::class, 'show'])->name('user');

Route::get('users', [UserController::class, 'index'])->name('index');


