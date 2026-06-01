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
            $cadastro = new Bolo;
            $cadastro->nome = $request->nome_bolo;
            $cadastro->recheio = $request->recheio_bolo;
            $cadastro->cobertura = $request->cobertura_bolo;
            $cadastro->descricao = $request->descricao_bolo;
            $cadastro->telefone = $request->telefone_bolo;
            $cadastro->endereco = $request->endereco_bolo;
            $cadastro->data_entrega = $request->data_bolo;
            $cadastro->save();

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