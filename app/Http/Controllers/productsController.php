<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        return view('barbershopProducts.products', ['search' => $search]);
    }

    public function show($id)
    {
        return view('barbershopProducts.show', ['id' => $id]);
    }
}