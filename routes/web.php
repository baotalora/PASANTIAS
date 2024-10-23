<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlador;
use App\Http\Controllers\postcontroller;

Route::get('/', [HomeControlador::class,'index' ]);

Route::get('post', [postcontroller::class,'index']);

Route::get('admin', function () {
    return 'aca seria los codigos qrs';
});


