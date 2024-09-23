<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\HabitatsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


Route::permanentRedirect('/home', '/');
Route::get('/habitats', [HabitatsController::class,'show'])->name('habitats');


Route::get('/', [HomeController::class, 'show'])->name('home');
Route::post('/avis', [AvisController::class,'add']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service',[ServicesController::class,'show'])->name('services');
Route::post('/service', [ServicesController::class,'add']);
Route::delete('/service/{id}', [ServicesController::class,'delete']);

Route::post('/contact',[ServicesController::class,'add']);

Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/signIn', function () {
    return view('signIn');
});

