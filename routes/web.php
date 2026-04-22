<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';
});
Route::get('/kontak', function () {
return view('contact');
});

Route::get('/profil', function () {
return view('profil');
});

Route::get('/katalog', function () {
return view('katalog');
});

Route::get('/bantuan', function () {
return view('bantuan');
});
//user
Route::get('/checkout', [App\Http\Controllers\EventController::class, 'checkout']);
Route::get('/ticket', [App\Http\Controllers\EventController::class, 'ticket']);
Route::get('/event', [EventController::class, 'index']);

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'],
 function () {Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/events', [AdminEventController::class, 'indexAdmin'])->name('events.index');
Route::get('/users', [DashboardController::class, 'users'])->name('users');
Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
});