<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::prefix('admin')->middleware(['auth'])->group(function(){
    // dashboard
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

    // Payment
    Route::get('payment', [App\Http\Controllers\Admin\PaymentController::class, 'payment'])->name('payment');
    Route::post('payment/search', [App\Http\Controllers\Admin\PaymentController::class, 'payment_search'])->name('payment.search');
    Route::get('payment/billings', [App\Http\Controllers\Admin\PaymentController::class, 'payment_billings'])->name('payment_billings');

    //Student
    Route::post('student/edit', [App\Http\Controllers\Admin\StudentController::class, 'index'])->name('student_edit');
    Route::get('student/update/save', [App\Http\Controllers\Admin\StudentController::class, 'student_update'])->name('student_update');
    Route::get('student/delete/id', [App\Http\Controllers\Admin\StudentController::class, 'student/delete'])->name('student_delete');

    // Attendances
    Route::get('/logs', [App\Http\Controllers\Admin\AttendanceController::class, 'attendance'])->name('attendance.log');

    // Academic Year
    Route::get('/academicyear', [App\Http\Controllers\Admin\AcademicYearController::class, 'index'])->name('acadyear.index');
});

