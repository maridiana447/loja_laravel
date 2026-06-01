@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="/css/carrinho.css">
<script src="carrinho.js"></script>
    <div id="carrinho" class="cart-list"></div>

    <div class="cart-footer">
        <h2>Total: R$ <span id="total">0,00</span></h2>

        <div class="actions">
            <button class="btn finalizar" onclick="finalizarCompra()">Finalizar</button>
            <button class="btn limpar" onclick="limparCarrinho()">Limpar</button>
            <a class="btn btn-secondary" style="margin-top: 10px;" href="loja">Adicionar mais produtos</a>
        </div>
    </div>
    <script src="carrinho.js"></script>
@endsection