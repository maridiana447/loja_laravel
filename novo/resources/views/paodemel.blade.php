@extends('layouts.navbar')
@section('content')
    <div class="container mt-4" style="background-color:  rgb(37, 6, 37);">
        <div class="row">
            <div class="col-md-4">
                <img src="paodemel2.webp" class="img-fluid rounded shadow-sm" style="margin-top: 80px;" alt="">
            </div>
            <div class="col-md-8">
                <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3 rounded border">
                    <a class="navbar-brand" href="#">Local de compra</a>
                    <ul class="nav nav-pills ms-auto">
                        <li class="nav-item">
                            <button class="nav-link" style="background-color: rgb(37, 6, 37);"
                                onclick="iniciarAvaliação()">Avaliações</button>
                        </li>
                    </ul>
                </nav>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                    data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 border"
                    tabindex="0" style="height: 400px; overflow-y: auto; position: relative;">
                    <h4 id="scrollspyHeading1"></h4>
                    <p> Nossos Pães de Mel Artesanais são cuidadosamente banhados em chocolate e decorados à mão com
                        pasta americana, trazendo os
                        personagens do Halloween em um formato prático e elegante de picolé.<br>
                        Você pode comprá-lo agora mesmo, pelo valor de :</p>
                    <h1>R$ 22,50</h1>
                    <button class="btn btn-lg w-100 text-white" style="background-color: rgb(37, 6, 37);"
                        onclick="iniciarCompra()">
                        Clique aqui para comprar!
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
