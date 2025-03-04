<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            max-width: 600px;
        }
        h1 {
            color: #f2a900;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
        }
        .form-control:focus {
            border-color: #f2a900;
            box-shadow: 0 0 5px rgba(242, 169, 0, 0.5);
        }
        .btn-warning {
            background-color: #f2a900;
            color: white;
            border: none;
            padding: 10px 20px;
            width: 100%;
            border-radius: 5px;
            font-size: 1rem;
        }
        .btn-warning:hover {
            background-color: #e69500;
        }
        .footer {
            background-color: #f2a900;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
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
                <textarea class="form-control" id="descripcion" rows="3" placeholder="Ej: Laptop con 8GB de RAM y 512GB de almacenamiento"></textarea>
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

    <footer class="footer">
        <p>&copy; 2025 Cursos UNAB | Todos los derechos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>