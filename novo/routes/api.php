<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BoloController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/salvar_usuario',[UsuarioController::class,'salvar_usuario'])->name('salvar_usuario');
Route::post('/salvar_bolo',[BoloController::class,'salvar_bolo'])->name('salvar_bolo');
Route::post('/alterar_produto',[BoloController::class,'alterar_produto'])->name('alterar_produto');