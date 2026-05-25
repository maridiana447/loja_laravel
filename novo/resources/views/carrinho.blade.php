<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="carrinho.js"></script>
    <link rel="stylesheet" href="/css/carrinho.css">
    
</head>

<body style="background-image: url(fundo-roxo.jpg); background-size: cover;">

    <nav class="navbar navbar-expand-lg" style="background-color: rgb(37, 6, 37);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <img width="105px" height="60px" src="Spooky-removebg-preview.png" alt="">
                    <a class="nav-link active" aria-current="page" href="inicio">Página Inicial</a>
                    <a class="nav-link" href="loja">Produtos</a>
                    <a class="nav-link" href="login">Login</a>
                    <a class="nav-link" href="cadastro">Cadastro</a>
                    <a class="nav-link" href="carrinho">Carrinho</a>
                </div>
            </div>
        </div>
    </nav>
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
</body>

</html>