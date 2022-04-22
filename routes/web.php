<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerAlamatController;
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
use App\Http\Controllers\CaraBelanjaController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SettingTokoController;
use App\Http\Controllers\PembelianController;

// Front End
use App\Http\Controllers\Frontend\DashboardCrontroller;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\LoginWebController;
use App\Http\Controllers\Frontend\RegisterWebController;
use App\Http\Controllers\frontend\SettingAkunController;
use App\Http\Controllers\Frontend\TentangKamiController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenjualanController;

// Route Front end
Route::get('/', [DashboardCrontroller::class, 'index'])->name('dashboard');
Route::get('/produk/{id}/{slug}', [DashboardCrontroller::class, 'DetailProduk'])->name('detail-produk');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/cara-belanja', [App\Http\Controllers\Frontend\CaraBelanjController::class, 'index'])->name('cara-belanja');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/signin-web', [RegisterWebController::class, 'index'])->name('signin-web');
Route::get('/auth-web', [LoginWebController::class, 'index'])->name('auth-web');
Route::get('/setting-akun', [SettingAkunController::class, 'index'])->name('setting-akun');
Route::get('/daftar-alamat', [SettingAkunController::class, 'daftarAlamat'])->name('daftar-alamat');
Route::put('update-user/{id}', [SettingAkunController::class, 'update'])->name('update-user');
Route::post('/register', [LoginWebController::class, 'register'])->name('register-user');;
Route::post('/login-web', [LoginWebController::class, 'login'])->name('auth-user');;
Route::get('/logout-web', [LoginWebController::class, 'logout'])->name('signout-user');;

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

    Route::get('/produk/get-item-by-id/{id}', [ProdukController::class, 'getItem']);
    Route::get('/GetGambarProduk/{id}', [ProdukController::class, 'GetGambarProduk']);
    Route::resource('/customer', CustomerController::class)->except('show');
    Route::get('/address/{id}', [CustomerController::class, 'address'])->name('address');
    Route::resource('/alamat', CustomerAlamatController::class)->except('show');
    Route::resource('/pesan', PesanController::class)->except('show');
    Route::resource('/supplier', SupplierController::class)->except('show');
    Route::controller(SettingTokoController::class)->group(function () {
        Route::get('/setting-toko', 'index')->name('setting-toko.index');
        Route::put('/setting-toko/update/{id}', 'update')->name('setting-toko.update');
    });
    Route::get('/laporan-pembelian', [LaporanController::class, 'laporan_pembelian'])->name('laporan-pembelian');
    Route::get('/laporan-penjualan', [LaporanController::class, 'laporan_penjualan'])->name('laporan-penjualan');

    Route::get('/cities/{provinsi_id}', [CustomerController::class, 'getCities']);
    Route::resource('/pembelian', PembelianController::class)->except('show');
    Route::put('update_status_bayar/{id}', [PembelianController::class, 'update_pembayaran'])->name('update_status_bayar');
    Route::resource('/penjualan', PenjualanController::class)->except('show');
    Route::resource('/cara-belanja', CaraBelanjaController::class)->except('show');
});

