<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <h1>Welcome to Laravel</h1>
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

</body>

</html>