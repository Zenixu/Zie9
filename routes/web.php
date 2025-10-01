<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;


Route::get('/buku-tamu', function () {
    return view('buku_tamu');
});

Route::post('/buku-tamu', [BukuTamuController::class, 'store']);