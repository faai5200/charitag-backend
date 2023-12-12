<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);

// routes/web.php


Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/charities', [AdminDashboardController::class, 'charities'])->name('admin.charities');
Route::get('/admin/campaigns', [AdminDashboardController::class, 'campaigns'])->name('admin.campaigns');
Route::get('/admin/corporations', [AdminDashboardController::class, 'corporations'])->name('admin.corporations');
Route::get('/admin/all_users', [AdminDashboardController::class, 'all_users'])->name('admin.all_users');
Route::get('/admin/settings', [AdminDashboardController::class, 'settings'])->name('admin.settings');
Route::get('/admin/logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');
