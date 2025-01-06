<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index()
    {
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
    }
    public function create(){
        return view('barbeshopService.create');
    }
}

