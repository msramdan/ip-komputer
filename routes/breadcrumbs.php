<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
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
