@extends('layouts.navbar')
@section('content')
<script src="cadastro_produto.js"></script>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-md-8 d-flex justify-content-center align-items-center">

                <div class="text-center">

                    <h2 style="color:#55009b;">BEM-VINDO AO SWEET SPOOKY</h2>
                    <p style="color:gray;">Digite seus dados para acessar na plataforma</p>

                    <div class="card p-4 mt-4" style="background-color:#111; color:white;">

                        <div class="d-flex mb-3">
                            <a href="login" class="btn btn-dark w-50">Login</a>
                            <button class="btn w-50" style="background:#55009b;">Cadastrar</button>
                        </div>
                        <div class="mb-3 text-start">
                            <label>Nome</label>
                            <input type="email" id="nome_usuario" class="form-control bg-dark text-white border-0"
                                placeholder="Escreva seu nome completo">
                        </div>

                        <div class="mb-3 text-start">
                            <label>Email</label>
                            <input type="email" id="email_usuario" class="form-control bg-dark text-white border-0"
                                placeholder="voce@gmail.com">
                        </div>

                        <div class="mb-2 text-start">
                            <label>Senha</label>
                            <input type="password" id="senha_usuario" class="form-control bg-dark text-white border-0"
                                placeholder="Escolha uma senha forte">
                        </div>

                        <div class="mb-2 text-start">
                            <label>Telefone</label>
                            <input type="" id="telefone_usuario" class="form-control bg-dark text-white border-0"
                                placeholder="Digite seu número">
                        </div>
                        <div class="mb-2 text-start">
                            <label>Data de Nascimento</label>
                            <input type="date" id="data_usuario" class="form-control bg-dark text-white border-0">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn text-white w-100" style="background-color:#55009b;" id="btn_cadastrar" href="inicio"> Acessar </a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4 p-0">
                <img src="sweet spook.png" class="img-pc" style="width:100%; height:100%; object-fit:cover;">
            </div>

    </div>
    </div>

@endsection