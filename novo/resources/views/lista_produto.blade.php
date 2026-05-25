@extends('layouts.principal')

@section('title', 'Lista de produtos')

@section('content')
<div class="container">
    <h1 class="text-center">Lista de produtos</h1>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Qtd. em Estoque</th>
      <th scope="col">Data de validade</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produtos as $p)
    <tr>
      <th scope="row">{{$p->id }}</th>
      <td>{{$p->nome }}</td>
      <td>{( $p->descricao )}</td>
      <td>{( $p->preco )}</td>
      <td>{( $p->estoque )}</td>
      <td>{( $p->data_validade )}</td>
      <td>{( $p->tipo )}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection