<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function index(){// ESTE METODO ES PARA LISTAR LOS PRODUCTOS
        return view('products.index');
    }

    Public function create(){// FORMULARIO PARA CREAR UN PRODUCTO
        return view('products.create');
    }

    Public function show($name, $categoria = null){// MOSTRAR UN PRODUCTO
        return view('products.show');
    }
}
