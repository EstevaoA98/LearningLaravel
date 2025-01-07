<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index()
    {
        return view('welcome',);
    }
    public function create(){
        return view('barbershopServices.create');
    }
}

