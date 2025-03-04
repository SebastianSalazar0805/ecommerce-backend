<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public function index(){// ESTE METODO ES PARA LISTAR LOS PRODUCTOS
        echo "LISTADO DE PRODUCTOS DEL ECOMERCE";
        }

    Public function create(){// FORMULARIO PARA CREAR UN PRODUCTO
        echo "FORMULARIO PARA CREAR UN PRODUCTO:";
        }

    Public function show($name, $categoria = null){// MOSTRAR UN PRODUCTO
        if ($categoria == null){
            echo "EK PRODUCTO ES: $name";
        }else{
            
            echo "El producto es $name, y su categoria es $categoria";
        }
        }
}
