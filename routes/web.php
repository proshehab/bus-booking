<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('authLoin');


Route::middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::post('/search', [HomeController::class, 'search']);

    Route::post('/book', [BookingController::class, 'store']);

    Route::get('/dashboard', [UserController::class, 'dashboard']);
});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('buses', BusController::class);
    Route::resource('routes', RouteController::class);
    Route::resource('schedules', ScheduleController::class);
});