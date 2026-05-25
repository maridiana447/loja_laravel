<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/inicio',[TesteController::class,'inicio']);
Route::get('/loja',[TesteController::class,'loja']);
Route::get('/pirulito',[TesteController::class,'pirulito']);
Route::get('/pirulito2',[TesteController::class,'pirulito2']);
Route::get('/bala',[TesteController::class,'bala']);
Route::get('/bala2',[TesteController::class,'bala2']);
Route::get('/chocolate',[TesteController::class,'chocolate']);
Route::get('/chocolate2',[TesteController::class,'chocolate2']);
Route::get('/paodemel',[TesteController::class,'paodemel']);
Route::get('/paodemel2',[TesteController::class,'paodemel2']);
Route::get('/bebidas2',[TesteController::class,'bebidas2']);
Route::get('/bebidas',[TesteController::class,'bebidas']);
Route::get('/bolo',[TesteController::class,'bolo']);
Route::get('/bolo2',[TesteController::class,'bolo2']);
Route::get('/carrinho',[TesteController::class,'carrinho']);
Route::get('/cadastro',[TesteController::class,'cadastro']);
Route::get('/login',[TesteController::class,'login]);