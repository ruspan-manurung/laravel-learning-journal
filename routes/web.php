<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Public route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Authentication Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', [AuthController::class, 'loginAction'])->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

    Route::get('profile', 'profile')->middleware('auth')->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');
    Route::post('profile/update', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');
});


// Protected Routes
Route::middleware('auth')->group(function () {

    // Route::get('dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::controller(MeetingController::class)->prefix('meeting')->group(function () {
        Route::get('', 'index')->name('meeting');
        Route::get('create', 'create')->name('meeting.create');
        // Route::post('store', 'store')->name('meeting.store');
        Route::get('show/{id}', 'show')->name('meeting.show');
        Route::get('edit/{id}', 'edit')->name('meeting.edit');
        Route::put('edit/{id}', 'update')->name('meeting.update');
        Route::delete('destroy/{id}', 'destroy')->name('meeting.destroy');
    });

        Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
        Route::get('', 'index')->name('dashboard.index');
        Route::get('create', 'create')->name('dashboard.create');
        Route::post('store', 'store')->name(name: 'dashboard.store');
        Route::get('show/{id}', 'show')->name('dashboard.show');
        Route::get('edit/{id}', 'edit')->name('dashboard.edit');
        Route::put('edit/{id}', 'update')->name('dashboard.update');
        Route::delete('destroy/{id}', 'destroy')->name('dashboard.destroy');
    });

});
