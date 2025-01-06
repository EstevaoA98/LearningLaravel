@extends('layouts.main')

@section('title', 'Barbearia')

@section(  'content')

<h1>Barbearia</h1>
<img class="navbar-img" src="/img/barbearia.jpg" alt="bancada de barbearia">
@if (10>5)
<p>A condiçao é true</p>
@endif

<p>{{$nome}}</p>

@if($nome == "Estevao")
<p>o meu é {{$nome}} tenho {{$idade}} anos, e estou estudando para ter a profissao de {{$profissao}} </p>
@endif
@for ($i=0; $i<count($arr); $i++)
    <p>Numero: {{$i}} - {{$i}}</p>
    @if ($i == 6)
    <p>Numero é 6</p>
    @endif
    @endfor

    @foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
    @endforeach
    <!-- comentatio redentrizado -->
    {{--comentario nao rederenziado--}}
    @php
    echo "nome: ".$nome;
    @endphp

    @endsection