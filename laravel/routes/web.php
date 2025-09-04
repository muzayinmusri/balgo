<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halo dari zein';
});

Route::get('/selamat-datang', function (){
    return view('Welcome');
});

Route::get('/halo',[HaloController::class,'index']);

Route::get('/buku',[BukuController::class,'index']);