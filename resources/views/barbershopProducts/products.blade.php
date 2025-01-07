@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Lista de Produtos</h1>
    @if (!empty($search))
        <p>O usuário está procurando por: {{ $search }}</p>
  
    @elseif ($search === null)
    <img class="navbar-img" src="/img/barbearia.jpg" alt="bancada de barbearia">

    @endif
@endsection