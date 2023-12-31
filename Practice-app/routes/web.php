<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(customcontroller::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/doctor', 'doctor')->name('doctor');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/treatment', 'treatment')->name('treatment');
});