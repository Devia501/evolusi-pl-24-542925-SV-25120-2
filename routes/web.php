<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::resource('mahasiswa', MahasiswaController::class)->except(['show']);
