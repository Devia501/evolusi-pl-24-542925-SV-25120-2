<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa', function () {
    return Mahasiswa::latest()->get();
});