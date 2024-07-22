<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordController;

// Route to store a new password
Route::post('passwords', [PasswordController::class, 'store']);

// Route to show a student's password
Route::get('passwords/{student_id}', [PasswordController::class, 'show']);


Route::get('/dbconn', function(){
    return view('dbconn');
});