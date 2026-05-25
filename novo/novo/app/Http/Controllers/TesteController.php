<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function inicio(Request $request){
    return view('inicio');
    }
    public function loja(Request $request){
    return view('loja');
    }
    public function pirulito(Request $request){
    return view('pirulito');
    }
    public function pirulito2(Request $request){
    return view('pirulito2');
    }
    public function bala(Request $request){
    return view('bala');
    }
    public function bala2(Request $request){
    return view('bala2');
    }
    public function chocolate(Request $request){
    return view('chocolate');
    }
    public function chocolate2(Request $request){
    return view('chocolate2');
    }
    public function paodemel(Request $request){
    return view('paodemel');
    }
    public function paodemel2(Request $request){
    return view('paodemel2');
    }
    public function bebidas2(Request $request){
    return view('bebidas2');
    }
    public function bebidas(Request $request){
    return view('bebidas');
    }
    public function bolo(Request $request){
    return view('bolo');
    }
    public function bolo2(Request $request){
    return view('bolo2');
    }
    public function carrinho(Request $request){
    return view('carrinho');
    }
    public function cadastro(Request $request){
    return view('cadastro');
    }
    public function login(Request $request){
    return view('login');
    }
}