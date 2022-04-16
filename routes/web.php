<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PesanController;

// Front End
use App\Http\Controllers\Frontend\DashboardCrontroller;
use App\Http\Controllers\SettingTokoController;
use App\Models\SettingToko;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'register' => false,
]);

// Route front end
Route::get('/', [DashboardCrontroller::class, 'index'])->name('home');

Route::get('/localization/{language}', [LocalizationController::class, 'switch'])->name('localization.switch');
// Route Back End
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return redirect()->route('home');
    });
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('/roles', RolesController::class);
    Route::resource('/user', UserController::class);
    Route::put('editProfile/{id}', [UserController::class, 'editProfile'])->name('editProfile');
    Route::resource('/unit', UnitController::class)->except('show');
    Route::resource('/kategori', KategoriController::class)->except('show');
    Route::resource('/produk', ProdukController::class)->except('show');
    Route::resource('/pesan', PesanController::class)->except('show');
    Route::resource('/supplier', SupplierController::class)->except('show');
    Route::resource('/setting-toko', SettingTokoController::class)->except('show');

    // Route::get('/setting-toko', [SettingTokoController::class, 'index']);
    // Route::post('/setting-toko', [SettingTokoController::class, 'store']);
});
