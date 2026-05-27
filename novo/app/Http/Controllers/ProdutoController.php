<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function cadastro_produto(Request $request)
    {
        return view('cadastro_produto');
    }

    public function salvar_produto(Request $request)
    {
        $request->validate([
            'nome_produto'  => 'required',
            'telefone_produto' => 'required',
            'email_produto' => 'required|email',
        ]);

        try {
            $produto = new Produto;
            $produto->nome = $request->nome_produto;
            $produto->telefone = $request->telefone_produto;
            $produto->email = $request->email_produto;
            $produto->data_nascimento = $request->data_nascimento;
            $produto->save();

            return response()->json([
                'erro' => 'n',
                'msg'  => 'Cadastrado com sucesso!',
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'erro' => 's',
                'msg'  => 'Erro ' . $th->getMessage(),
            ], 500);
        }
    }

    public function listar_produtos(Request $request)
    {
        $produtos = Produto::all();
        return view('lista_produto')->with('produtos', $produtos);
    }
}