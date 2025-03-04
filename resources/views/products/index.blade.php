@extends('layout.app')
@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Nuestros Productos</h1>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">Categoría: Electrónica</p>
                        <p class="card-text">Precio: $99.99</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">Categoría: Hogar</p>
                        <p class="card-text">Precio: $49.99</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">Categoría: Ropa</p>
                        <p class="card-text">Precio: $29.99</p>
                        <a href="#" class="btn btn-warning">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection