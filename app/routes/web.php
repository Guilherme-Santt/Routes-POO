<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/show/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');