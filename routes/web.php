<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('expenses', App\Http\Controllers\ExpenseController::class);
