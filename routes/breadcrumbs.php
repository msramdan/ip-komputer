<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// ============================================================================================================
//Produk
Breadcrumbs::for('produk_index', function (BreadcrumbTrail $trail) {
    $trail->push('Data Produk', route('produk.index'));
});
//Produk > Tambah
Breadcrumbs::for('produk-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('produk_index');
    $trail->push('Tambah Produk', route('produk.create'));
});
//Produk > Edit
Breadcrumbs::for('produk-edit', function (BreadcrumbTrail $trail, $produk) {
    $trail->parent('produk_index');
    $trail->push('Edit', route('produk.edit', $produk));
    $trail->push($produk->kode_produk. ' - ' .$produk->nama , route('produk.edit', $produk));
});


// ============================================================================================================
//unit
Breadcrumbs::for('unit_index', function (BreadcrumbTrail $trail) {
    $trail->push('Data Unit', route('unit.index'));
});
//unit > Tambah
Breadcrumbs::for('unit-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('unit_index');
    $trail->push('Tambah Unit', route('unit.create'));
});
//Unit > Edit
Breadcrumbs::for('unit-edit', function (BreadcrumbTrail $trail, $unit) {
    $trail->parent('unit_index');
    $trail->push('Edit', route('unit.edit', $unit));
    $trail->push($unit->nama_unit, route('unit.edit', $unit));
});

// ============================================================================================================
//kategori
Breadcrumbs::for('kategori_index', function (BreadcrumbTrail $trail) {
    $trail->push('Data Kategori', route('kategori.index'));
});
//kategori > Tambah
Breadcrumbs::for('kategori-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('kategori_index');
    $trail->push('Tambah Kategori', route('kategori.create'));
});
//kategori > Edit
Breadcrumbs::for('kategori-edit', function (BreadcrumbTrail $trail, $kategori) {
    $trail->parent('kategori_index');
    $trail->push('Edit', route('kategori.edit', $kategori));
    $trail->push($kategori->nama_kategori, route('kategori.edit', $kategori));
});


// ============================================================================================================
//supplier
Breadcrumbs::for('supplier_index', function (BreadcrumbTrail $trail) {
    $trail->push('Data supplier', route('supplier.index'));
});
//supplier > Tambah
Breadcrumbs::for('supplier-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('supplier_index');
    $trail->push('Tambah supplier', route('supplier.create'));
});
//supplier > Edit
Breadcrumbs::for('supplier-edit', function (BreadcrumbTrail $trail, $supplier) {
    $trail->parent('supplier_index');
    $trail->push('Edit', route('supplier.edit', $supplier));
    $trail->push($supplier->kode_supplier. ' - ' .$supplier->nama_supplier , route('supplier.edit', $supplier));
});

// ============================================================================================================
//pesan
Breadcrumbs::for('pesan_index', function (BreadcrumbTrail $trail) {
    $trail->push('Data pesan', route('pesan.index'));
});
//pesan > Tambah
Breadcrumbs::for('pesan-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('pesan_index');
    $trail->push('Tambah pesan', route('pesan.create'));
});
//pesan > Edit
Breadcrumbs::for('pesan-edit', function (BreadcrumbTrail $trail, $pesan) {
    $trail->parent('pesan_index');
    $trail->push('Edit', route('pesan.edit', $pesan));
    $trail->push($pesan->nama , route('pesan.edit', $pesan));
});


// ============================================================================================================
//setting-toko
Breadcrumbs::for('toko_index', function (BreadcrumbTrail $trail) {
    $trail->push('Setting Toko', route('setting-toko.index'));
});
//setting-toko > Tambah
Breadcrumbs::for('toko-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('toko_index');
    $trail->push('Tambah Toko', route('setting-toko.create'));
});
//setting-toko > Edit
Breadcrumbs::for('toko-edit', function (BreadcrumbTrail $trail, $setting_toko) {
    $trail->parent('toko_index');
    $trail->push('Edit Toko', route('setting-toko.edit', $setting_toko));
    $trail->push($setting_toko->nama_toko, route('setting-toko.edit', $setting_toko));
});



// ============================================================================================================
// Roles
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->push('Roles', route('roles.index'));
});
// Roles > Tambah
Breadcrumbs::for('roles-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('roles');
    $trail->push('Tambah Role', route('roles.create'));
});
//Roles > Detail
Breadcrumbs::for('roles-show', function (BreadcrumbTrail $trail, $role) {
    $trail->parent('roles');
    $trail->push('Detail', route('roles.show', $role));
    $trail->push($role->name , route('roles.show', $role));
});
//Roles > Edit
Breadcrumbs::for('roles-edit', function (BreadcrumbTrail $trail, $role) {
    $trail->parent('roles');
    $trail->push('Edit', route('roles.edit', $role));
    $trail->push($role->name, route('roles.edit', $role));
});
// ============================================================================================================
// User
Breadcrumbs::for('user', function (BreadcrumbTrail $trail) {
    $trail->push('User', route('user.index'));
});

// User > Tambah
Breadcrumbs::for('user-tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('user');
    $trail->push('Tambah User', route('user.create'));
});

//User > Edit
Breadcrumbs::for('user-edit', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('user');
    $trail->push('Edit', route('user.edit', $user));
    $trail->push($user->name, route('user.edit', $user));
});
// ============================================================================================================
