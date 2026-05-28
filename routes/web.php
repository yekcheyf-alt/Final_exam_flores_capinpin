<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    
    Route::get('employee', [App\Http\Controllers\employeecontroller::class, 'index']);
    Route::post('employee', [App\Http\Controllers\employeecontroller::class, 'index']);


    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    // Employee routes
    
    Route::get('employee/{id}/edit', [\App\Http\Controllers\employeecontroller::class, 'edit'])->name('employee.edit');
    Route::put('employee/{id}', [\App\Http\Controllers\employeecontroller::class, 'update'])->name('employee.update');
    Route::delete('employee/{id}', [\App\Http\Controllers\employeecontroller::class, 'destroy'])->name('employee.destroy');
    // Student routes
 
    





    //Profile routes
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
