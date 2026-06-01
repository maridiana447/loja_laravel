@extends('layouts.navbar')
@section('content')
<script src="barra.js"></script>
    <nav class="col-lg-3 mx-auto"
        style="background-color: rgb(37, 6, 37); border-radius: 8px; padding: 15px; margin-top: 15px;">
        <div class="text-white">
            <label for="range4" class="form-label">Selecione o valor máximo:</label>
            <input type="range" class="form-range" min="0" max="100" id="range4" value="100">
            <h2 id="rangeValue" class="mt-2">R$ 100,00</h2>
        </div>
    </nav>
    <div class="d-flex gap-3 flex-wrap justify-content-center" style="margin-top: 10px;">
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;" id="todos">Todos</button>
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;"
            id="chocolates">Chocolates</button>
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;" id="balas">Balas</button>
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;"
            id="pirulitos">Pirulitos</button>
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;" id="paodemel">Pão de
            Mel</button>
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;" id="bolos">Bolo</button>
        <button class="filtro btn" style="background-color: rgb(37, 6, 37); color: white;" id="bebida">Bebidas</button>
    </div>

    <div class="d-flex gap-3 flex-wrap justify-content-center">
        <div class="container mt-4">
            <div class="row justify-content-center gap-3" style="margin-top: 30px; margin-left: 80px;">
                <div class="card" id="chocolate" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="chocolate.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Moedas sabor Chocolate</h5>
                        <a href="chocolate" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Moedas Sabor Chocolate', 25.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="bala" style="width: 18rem; background-color: rgb(37, 6, 37); color: white;">
                    <img src="bala.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bala Fini Aranha</h5>

                        <a href="bala" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Bala Fini de Aranha', 9.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="bolo" style="width: 18rem;background-color: rgb(37, 6, 37)">
                    <img src="bolo.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bolo Abóbora</h5>

                        <a href="bolo" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Bolo Abóbora', 59.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="pirulito" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="pirulito.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bruxolito Q Pinta</h5>

                        <a href="pirulito" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Bruxolito Q Pinta', 18.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="paodemels" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="paodemel.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pão de Mel</h5>

                        <a href="paodemel2" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Pão de Mel', 4.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="bebidas" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="bebidas.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Refrigerantes variados</h5>

                        <a href="bebidas2" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Refrigerantes Variados', 16.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="bebidas2" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="bebidas2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Drinks</h5>

                        <a href="bebidas" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Drinks', 29.90)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="paodemel2" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="paodemel2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pão de Mel(Quadrado)</h5>

                        <a href="paodemel" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Pão de Mel Quadrado', 22.50)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="bolo2" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="bolo2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bolo Cemitério</h5>

                        <a href="bolo2" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Bolo Cemitério', 100.00)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="chocolate2" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="chocolate2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Caixão</h5>

                        <a href="chocolate2" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Chocolate Caixão', 25.99)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="bala2" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="balas2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bala Fini Dentadura</h5>

                        <a href="bala2" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Bala Fini Dentadura', 3.90)">
                        Adicionar ao Carrinho!
                    </button>
                </div>
                <div class="card" id="pirulito2" style="width: 18rem; background-color: rgb(37, 6, 37);">
                    <img src="pirulito2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bruxolito abóbora</h5>

                        <a href="pirulito2" class="btn btn-dark">Comprar</a>
                    </div>
                    <button class="btn btn-lg w-100 text-white mt-2" style="background-color: rgb(37, 6, 37);"
                        onclick="adicionarAoCarrinho('Bruxolito Abóbora', 16.50)">
                        Adicionar ao Carrinho!
                    </button>
                </div>


            </div>
        </div>
    </div>
    <script>
        function adicionarAoCarrinho(nome, preco) {
            var produtos = JSON.parse(localStorage.getItem('carrinho')) || [];

            var encontrado = false;

            for (var i = 0; i < produtos.length; i++) {
                if (produtos[i].nome === nome) {
                    produtos[i].quantidade += 1;
                    encontrado = true;
                    break;
                }
            }

            if (!encontrado) {
                produtos.push({ nome: nome, preco: preco, quantidade: 1 });
            }

            localStorage.setItem('carrinho', JSON.stringify(produtos));

            window.location.href = "carrinho";
        }
    </script>
@endsection