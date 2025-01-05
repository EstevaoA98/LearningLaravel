@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Tela de produtos</h1>
@if ($search != '')
    <p>O usuario esta procurando por: {{ $search }}</p>
@endif
@endsection