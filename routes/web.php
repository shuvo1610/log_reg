<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/',[loginController::class,'login'])->name('auth.login');

Route::get('user-reg',[loginController::class,'create'])->name('auth.reg');
Route::post('user-store',[loginController::class,'store'])->name('user.store');

Route::get('user-Verified/{id}',[loginController::class,'Verified'])->name('user.Verified');


Route::post('user-login',[loginController::class,'postlogin'])->name('user.login');

Route::get('auth-dashboard',[loginController::class,'dashboard'])->name('auth.dashboard');

Route::get('user-logout',[loginController::class,'logout'])->name('user.logout');
