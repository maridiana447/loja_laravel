<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function cadastro(Request $request)
    {
        return view('cadastro');
    }

    public function salvar_usuario(Request $request)
    {
        $request->validate([
            'nome_usuario'  => 'required',
            'telefone_usuario' => 'required',
            'senha_usuario' => 'required',
            'email_usuario' => 'required',
            'data_usuario' => 'required',
        ]);

        try {
            $cadastro = new Usuario;
            $cadastro->nome = $request->nome_usuario;
            $cadastro->telefone = $request->telefone_usuario;
            $cadastro->email = $request->email_usuario;
            $cadastro->data_nascimento = $request->data_usuario;
            $cadastro->senha = $request->senha_usuario;
            $cadastro->save();

            $data = [];
            $data = [
                'erro' => 'n',
                'msg'  => 'Cadastrado com sucesso!',
            ];

             return response()->json($data, 200);
        } catch (\Throwable $th) {
          

            $data = [
                'error' => 's',
                'msg' => 'Erro ao cadastrar o produto',

            ];
            return response()->json($data, 200);
        };

    }

}