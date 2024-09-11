<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Front Controller
Route::get('/',[FrontController::class, 'index'])->name('home');
Route::get('/about-us',[FrontController::class, 'about_us'])->name('about');
Route::get('/services',[FrontController::class, 'service'])->name('service');
Route::get('/contact-us',[FrontController::class, 'contact'])->name('contact');
