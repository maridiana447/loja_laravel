@extends('layouts.navbar')

@section('title', 'Lista de produtos')

@section('content')
  <div class="container vh-100 text-center">
    <h2 style="color:white;" class="mt-4">Encomendas realizadas!</h2>
    <p style="color:white;">Detalhe dos pedidos personalizados:</p>
    <table class="table table-hover table-bordered align-middle shadow-sm bg-white rounded mt-5 w-auto mx-auto">
      <thead class="table-dark">
        <tr>
          <th>Pedido</th>
          <th>Nome</th>
          <th>Recheio</th>
          <th>Cobertura</th>
          <th>Descrição</th>
          <th>Data</th>
          <th>Telefone</th>
          <th>Endereço</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($Bolo as $b)
        <tr>
          <td>{{ $b->id }}</td>
          <td>{{ $b->nome }}</td>
          <td>{{ $b->recheio }}</td>
          <td>{{ $b->cobertura }}</td>
          <td>{{ $b->descricao }}</td>
          <td>{{ $b->data_entrega }}</td>
          <td>{{ $b->telefone }}</td>
          <td>{{ $b->endereco }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>     
  </div>

@endsection