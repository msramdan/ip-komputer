<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;




Auth::routes([
    'register' => false,
]);
// Route switch bahasa
Route::get('/localization/{language}', [LocalizationController::class, 'switch'])->name('localization.switch');

// Route home
Route::get('/home', function () {
    return redirect()->route('home');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Roles
Route::resource('/roles', RolesController::class);

// Route User
Route::resource('/user', UserController::class);
// Unit
Route::resource('/unit', UnitController::class);
// Kategori
Route::resource('/kategori', KategoriController::class);
