@extends('layout.app')
@section('content')
    <div class="container">
   


    <h1>Crear Producto</h1>
    <form>
        <!-- Campo para el nombre del producto -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ej: Laptop HP">
        </div>

        <!-- Campo para la descripción del producto -->
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" rows="3"
                placeholder="Ej: Laptop con 8GB de RAM y 512GB de almacenamiento"></textarea>
        </div>

        <!-- Campo para el precio del producto -->
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" placeholder="Ej: 999.99">
        </div>

        <!-- Campo para la imagen del producto -->
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del Producto</label>
            <input type="file" class="form-control" id="imagen">
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-warning">Crear Producto</button>
    </form>
</div>
 @endsection