<?php

use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/perfil')->controller(PerfilController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/intereses', 'intereses');
    Route::get('/habilidades', 'habilidades');
    Route::get('/metas', 'metas');
});