<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AddTeachers', function () {
    return view('teacherAdd');
});

Route::post('store_data', [App\Http\Controllers\FormController::class, 'store_data']);
