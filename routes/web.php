<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

// Route::get('/', function(){
//     return view('welcome')->name('home');
// });


Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('user/{user?}', [UserController::class, 'show'])->name('user');

Route::get('users', [UserController::class, 'index'])->name('index');


