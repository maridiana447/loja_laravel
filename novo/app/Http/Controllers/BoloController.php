<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolo;

class BoloController extends Controller
{
    public function encomenda(Request $request)
    {
        return view('encomenda');
    }

    public function salvar_bolo(Request $request)
    {
        $request->validate([
            'nome_bolo'  => 'required',
            'recheio_bolo' => 'required',
            'cobertura_bolo' => 'required',
            'descricao_bolo' => 'required',
            'telefone_bolo' => 'required',
            'endereco_bolo' => 'required',
            'data_bolo' => 'required',
        ]);

        try {
            $encomenda = new Bolo;
            $encomenda->nome = $request->nome_bolo;
            $encomenda->recheio = $request->recheio_bolo;
            $encomenda->cobertura = $request->cobertura_bolo;
            $encomenda->descricao = $request->descricao_bolo;
            $encomenda->telefone = $request->telefone_bolo;
            $encomenda->endereco = $request->endereco_bolo;
            $encomenda->data_entrega = $request->data_bolo;
            $encomenda->save();

            $data = [];
            $data = [
                'erro' => 'n',
                'msg'  => 'Seu bolo personalizado foi enviado para preparação!',
            ];

             return response()->json($data, 200);
        } catch (\Throwable $th) {
          

            $data = [
                'error' => 's',
                'msg' => 'Erro ao personalizar seu bolo!',

            ];
            return response()->json($data, 200);
        };

    }

}