<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::get('/', [HotelController::class, 'index'])->name('home');

Route::post('/reservar', [HotelController::class, 'reservar'])->name('reservar');