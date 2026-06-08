@extends('layouts.navbar')

@section('title', 'Visualizar Produto')

@section('content')
<script src="../alterar_produto.js"></script>
<div class="container container-sm">
    <input type="hidden" id="produto_id" value="{{ $Bolo->id }}">
    <h3 class="text-center">Visualizar Produto</h3>
    <div class="row mt-2 justify-content-center p-3 rounded shadow-sm bg-body-tertiary">

        <div class="col-lg-12 col-sm-12 col-md-10">
            <label for="nome_produto">Nome do Produto</label>
            <input type="text" class="form-control form-control-sm" id="nome_produto"
                value="{{ $Bolo->nome }}" >
        </div>

        <div class="col-lg-12 col-sm-12 col-md-10 mt-2">
            <label for="descricao_produto">Descrição do Produto</label>
            <textarea class="form-control form-control-sm" id="descricao_produto" >{{ $Bolo->descricao }}</textarea>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for="recheio">Recheio</label>
            <input type="text" class="form-control form-control-sm" id="recheio"
                value="{{ $Bolo->recheio }}" >
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for="cobertura">Cobertura</label>
            <input type="text" class="form-control form-control-sm" id="cobertura"
                value="{{ $Bolo->cobertura }}" >
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control form-control-sm" id="telefone"
                value="{{ $Bolo->telefone }}" >
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for="data_entrega">Data de Entrega</label>
            <input type="date" class="form-control form-control-sm" id="data_entrega"
                value="{{ $Bolo->data_entrega }}" >
        </div>

        <div class="col-lg-12 col-sm-12 col-md-10 mt-2">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control form-control-sm" id="endereco"
                value="{{ $Bolo->endereco }}" >
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 mt-3">
            <button class="btn btn-warning btn-sm" id="btn_alterar">Alterar produto</button>
        </div>

    </div>
</div>
@endsection