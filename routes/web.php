<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\AttendanceNonStaffController;
use App\Http\Controllers\AttendanceStaffController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','api'])->group(function(){
   
Route::prefix('staff')->group(function(){
    Route::get('/',[StaffController::class,'index'])->name('staff.index');
    Route::get('/create',[StaffController::class,'create'])->name('staff.create');
    Route::post('/store',[StaffController::class,'store'])->name('staff.store');
    Route::post('/destroy/{id}',[StaffController::class,'destroy'])->name('staff.destroy');
    Route::get('/show/{id}',[StaffController::class,'show'])->name('staff.show');
    Route::get('/edit/{id}',[StaffController::class,'edit'])->name('staff.edit');
    Route::post('/edit/store/{id}',[StaffController::class,'storeEdit'])->name('staff.saveEdit');
});


Route::prefix('teaching/attendance')->group(function(){
    Route::get('/',[AttendanceStaffController::class,'index'])->name('attendance.staff.index');
    Route::get('/create',[AttendanceStaffController::class,'create'])->name('attendance.staff.create');
    Route::post('/store',[AttendanceStaffController::class,'store'])->name('attendance.staff.store');
});

Route::get('/export', [ExportController::class, 'export'])->name('export');
Route::get('/attendance/export', [ExportController::class, 'attendanceExport'])->name('attexport');

});

