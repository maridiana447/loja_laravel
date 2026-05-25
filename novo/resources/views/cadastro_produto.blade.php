@extends('layouts.principal')

@section('title', 'Cadastro de produtos')

@section('content')
<script src="cadastro_produto.js"></script>
<div class="container container-sm">
    <h3 class="text-center">Cadastro de Produto</h3>
    <div class="row mt-2 justify-content-center p-3 rounded shadow-sm bg-body-tertiary">
        <div class="col-lg-12 col-sm-12 col-md-10">
            <label for ="nome_produto">Nome do Produto</label>
            <input type="text" class="form-control form-control-sm" id="nome_produto" name="nome_produto" placeholder="Digite o nome do produto">
        </div>
        <div class="col-lg-12 col-sm-12 col-md-10 mt-2">
            <label for ="descricao_produto">Descrição do Produto</label>
            <textarea type="text" class="form-control form-control-sm" id="descricao_produto" name="descricao_produto" placeholder="Digite a descrição do produto"></textarea>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for ="preco_produto">Preço do Produto</label>
            <input type="number" class="form-control form-control-sm" min="0.00" step="0.01" id="preco_produto" name="preco_produto" 
            placeholder="Digite o preço do produto">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for ="estoque_produto">Quantidade em estoque</label>
            <input type="number" class="form-control form-control-sm" min="0" step="1" id="estoque_produto" name="estoque_produto" 
            placeholder="Digite a quantidade em estoque">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for ="tipo_produto">Tipo do Produto</label>
            <input type="text" class="form-control form-control-sm"  id="tipo_produto" name="tipo_produto" 
            placeholder="Digite o tipo do produto">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
            <label for ="data_validade">Data de validade</label>
            <input type="date" class="form-control form-control-sm"  id="data_validade" name="data_validade" >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 mt-2">
            <button class="btn btn-success btn-sm" id="btn_cadastrar">Cadastrar produto</button>
        </div>
    </div>

</div>

@endsection