<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

Route::get('',[PagesController::class,'index'])->name('home');
Route::get('/register', [RegistrationController::class,'index'])->name('register');
Route::post('/register',[RegistrationController::class,'register'])->name('register');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
