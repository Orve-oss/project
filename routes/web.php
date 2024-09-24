<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('page');
});
Route::get('/list', [ClientController::class, 'index'])->name('listClient');
