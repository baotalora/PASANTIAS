<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlador;
use App\Http\Controllers\Pagocontrolador;
use App\Http\Controllers\postcontroller;


Route::get('/', [HomeControlador::class,'index' ]);

Route::get('post', [postcontroller::class,'index']);

Route::get('Pago', [Pagocontrolador::class,'index']);


Route::get('/pasantias', function () {
    return view('Home'); // Esto buscará un archivo Home.blade.php
});

Route::get('/pasantias', function () {
    return view('pagina1'); // Asegúrate de que el nombre coincida
});
