<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Estevao';
    $idade = 26;
    $profissao = 'Desenvolvedor Web';

    $arr = ['1', '2', '3', '4', '5', '6', '7'];
    $nomes = ['joao','maria','jose','esveraldo','maria aparecida'];
    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes'=> $nomes
    ]);
});
