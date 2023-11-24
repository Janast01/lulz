<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;

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

 Route::get('/', function () {
     return redirect('/login');
 });

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function(){
	Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('list')->middleware(['auth'])->group(function(){
	Route::get('/', [App\Http\Controllers\Admin\ListController::class, 'index'])->name('list.index');
	Route::get('/search', [App\Http\Controllers\Admin\ListController::class, 'list'])->name('list.search');
});

Route::prefix('fines')->middleware(['auth'])->group(function(){
	Route::get('/total', [App\Http\Controllers\Admin\FinesController::class, 'fines'])->name('fines.total');
});

Route::prefix('list')->middleware(['auth'])->group(function(){
    Route::get('/store', [App\Http\Controllers\Admin\ListController::class, 'index'])->name('list.index');
    Route::get('/store', [App\Http\Controllers\Admin\ListController::class, 'list'])->name('list.store');
});