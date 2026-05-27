@extends('layouts.navbar')
@section('content')
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
                            <label>E-mail</label>
                            <input type="email" class="form-control bg-dark text-white border-0"
                                placeholder="voce@gmail.com">
                        </div>

                        <div class="mb-2 text-start">
                            <label>Senha</label>
                            <input type="password" class="form-control bg-dark text-white border-0"
                                placeholder="Escolha uma senha forte">
                        </div>

                        <div class="mb-2 text-start">
                            <label>Confirmar senha</label>
                            <input type="password" class="form-control bg-dark text-white border-0"
                                placeholder="Confirme sua senha">
                        </div>

                        <a href="inicio" class="btn w-100" style="background-color:#55009b;">Acessar</a>

                    </div>

                </div>

            </div>
            <div class="col-md-4 p-0">
                <img src="sweet spook.png" class="img-pc" style="width:100%; height:100%; object-fit:cover;">
            </div>

    </div>
    </div>

@endsection