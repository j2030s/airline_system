<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\FlightController;

Route::get('/', function () {
    return view('home');
});

route::get('/admin', [AdminController::class, 'admin'])->name('auth.admin');



// routes for airport management


Route::get('/airports', [AirportController::class, 'index'])->name('airports.a_index');
Route::get('/airports/a_create', [AirportController::class, 'create'])->name('airports.a_create');
Route::POST('/airports', [AirportController::class, 'store'])->name('airports.store');
Route::get('/airports/{airport}/a_edit', [AirportController::class, 'edit'])->name('airports.edit');
Route::put('/airports/{airport}',  [AirportController::class, 'update'])->name('airports.update');
Route::delete('/airports/{airport}',[AirportController::class, 'destroy'])->name('airports.destroy');

// CRUD Flight



Route::get('/flights', [FlightController::class, 'index'])->name('flights.f_index');
Route::get('/flights/f_create', [FlightController::class, 'create'])->name('flights.create');
Route::post('/flights', [FlightController::class, 'store'])->name('flights.store');
Route::get('/flights/{flight}/f_edit', [FlightController::class, 'edit'])->name('flights.edit');
Route::put('/flights/{flight}',  [FlightController::class, 'update'])->name('flights.update');
Route::delete('/flights/{flight}',[FlightController::class, 'destroy'])->name('flights.destroy');

