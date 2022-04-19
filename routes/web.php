<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Back end
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SettingTokoController;
use App\Http\Controllers\PembelianController;
// Front End
use App\Http\Controllers\Frontend\DashboardCrontroller;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\LoginWebController;
use App\Http\Controllers\Frontend\RegisterWebController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\PenjualanController;

// Route Front end
Route::get('/', [DashboardCrontroller::class, 'index'])->name('dashboard');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/signin-web', [RegisterWebController::class, 'index'])->name('signin-web');
Route::get('/auth-web', [LoginWebController::class, 'index'])->name('auth-web');

// Route Back end
Route::get('/localization/{language}', [LocalizationController::class, 'switch'])->name('localization.switch');
Route::get('panel-login', [LoginController::class, 'showLoginForm'])->name('panel-login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::prefix('panel')->middleware('auth')->group(function () {
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
    Route::get('/GetGambarProduk/{id}', [ProdukController::class, 'GetGambarProduk']);
    Route::resource('/customer', CustomerController::class)->except('show');
    Route::get('/address/{id}', [CustomerController::class, 'address'])->name('address');
    Route::resource('/pesan', PesanController::class)->except('show');
    Route::resource('/supplier', SupplierController::class)->except('show');
    Route::resource('/setting-toko', SettingTokoController::class)->except(['show','create','store','destroy']);
    Route::get('/cities/{provinsi_id}', [CustomerController::class, 'getCities']);
    Route::resource('/pembelian', PembelianController::class)->except('show');
    Route::resource('/penjualan', PenjualanController::class)->except('show');
});

