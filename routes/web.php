<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listagem', [ProdutosController::class, 'index']);