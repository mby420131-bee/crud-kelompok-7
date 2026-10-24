<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Models\Kendaraan;

Route::get('/', function () {
    $kendaraans = Kendaraan::latest('id')->paginate(4);

    return view('dashboard', compact('kendaraans'));
})->name('dashboard');

Route::resource('kendaraan',
KendaraanController::class);
