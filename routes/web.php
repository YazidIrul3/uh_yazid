<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('penerbit', PenerbitController::class);
Route::resource('buku', BukuController::class);

require __DIR__.'/auth.php';
