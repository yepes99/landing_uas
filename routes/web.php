<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ContactController;


Route::get('/', [LandingController::class, 'index']);
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
