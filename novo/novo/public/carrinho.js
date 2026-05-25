var produtos = JSON.parse(localStorage.getItem('carrinho')) || [];

function salvarCarrinho() {
    localStorage.setItem('carrinho', JSON.stringify(produtos));
}

function renderizarCarrinho() {
    var div = document.getElementById('carrinho');
    var total = 0;

    if (!div) return;

    if (produtos.length === 0) {
        div.innerHTML = '<p class="empty">🛒 Seu carrinho está vazio.</p>';
        document.getElementById('total').innerText = '0,00';
        return;
    }

    var html = '';

    for (var i = 0; i < produtos.length; i++) {
        var p = produtos[i];
        var subtotal = p.preco * p.quantidade;
        total += subtotal;

        html += `
      <div class="cart-item">
        <div class="info">
          <h3>${p.nome}</h3>
          <p>R$ ${p.preco.toFixed(2).replace('.', ',')}</p>
        </div>

        <div class="controls">
          <button onclick="alterarQuantidade(${i}, -1)">−</button>
          <span>${p.quantidade}</span>
          <button onclick="alterarQuantidade(${i}, 1)">+</button>
        </div>

        <div class="subtotal">
          R$ ${subtotal.toFixed(2).replace('.', ',')}
        </div>

        <button class="remove" onclick="removerProduto(${i})">✖</button>
      </div>
    `;
    }

    div.innerHTML = html;
    document.getElementById('total').innerText = total.toFixed(2).replace('.', ',');
}

function alterarQuantidade(index, delta) {
    produtos[index].quantidade += delta;

    if (produtos[index].quantidade <= 0) {
        produtos.splice(index, 1);
    }

    salvarCarrinho();
    renderizarCarrinho();
}

function removerProduto(index) {
    produtos.splice(index, 1);
    salvarCarrinho();
    renderizarCarrinho();
}

function limparCarrinho() {
    produtos = [];
    localStorage.removeItem('carrinho');
    renderizarCarrinho();
}

function finalizarCompra() {
    if (produtos.length === 0) {
        alert('Seu carrinho está vazio!');
        return;
    }

    var total = 0;
    var msg = 'Resumo:\n\n';

    for (var i = 0; i < produtos.length; i++) {
        var p = produtos[i];
        var subtotal = p.preco * p.quantidade;
        total += subtotal;
        msg += p.nome + ' x' + p.quantidade + '\n';
    }

    msg += '\nTotal: R$ ' + total.toFixed(2).replace('.', ',');

    alert(msg);

    produtos = [];
    localStorage.removeItem('carrinho');
    renderizarCarrinho();
}

renderizarCarrinho();