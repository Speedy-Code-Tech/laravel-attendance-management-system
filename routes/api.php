<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// FOR API
Route::get('/employee',[APIController::class,'index'])->name('api.index');
Route::get('/attendees',[APIController::class,'attendees'])->name('api.attendees');


