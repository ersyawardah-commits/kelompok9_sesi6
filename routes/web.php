
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('pilih-role');
})->name('pilih.role');

// PELANGGAN
Route::get('/pelanggan', [RoleController::class, 'pelanggan'])
    ->name('pelanggan');

Route::post('/pelanggan', [RoleController::class, 'prosesPelanggan'])
    ->name('pelanggan.proses');

Route::get('/pelanggan/menu', [RoleController::class, 'menuPelanggan'])
    ->name('menu.pelanggan');

Route::post('/pelanggan/logout', [RoleController::class, 'logoutPelanggan'])
    ->name('pelanggan.logout');

// KASIR / ADMIN
Route::get('/login/kasir', [RoleController::class, 'loginKasir'])
    ->name('login.kasir');

Route::post('/login/kasir', [RoleController::class, 'prosesLogin'])
    ->defaults('role', 'kasir')
    ->name('login.kasir.proses');

Route::get('/kasir/dashboard', [RoleController::class, 'dashboardKasir'])
    ->name('dashboard.kasir');

// PETUGAS DAPUR
Route::get('/login/dapur', [RoleController::class, 'loginDapur'])
    ->name('login.dapur');

Route::post('/login/dapur', [RoleController::class, 'prosesLogin'])
    ->defaults('role', 'dapur')
    ->name('login.dapur.proses');

Route::get('/dapur/dashboard', [RoleController::class, 'dashboardDapur'])
    ->name('dashboard.dapur');

// LOGOUT STAF
Route::post('/logout', [RoleController::class, 'logout'])
    ->name('logout');