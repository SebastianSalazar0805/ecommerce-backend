<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones UNAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #f2a900;
        }
        .navbar-brand img {
            height: 50px;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .hero {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .card {
            border: none;
            text-align: center;
        }
        .card img {
            width: 100px;
            height: auto;
            margin: auto;
            display: block;
        }
        .footer {
            background-color: #f2a900;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://media.sipiapa.org/adjuntos/185/imagenes/001/819/0001819724.jpg" alt="Logo UNAB">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#promociones">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h1>Cursos para la comunidad UNAB</h1>
        <p>Aprende nuevas habilidades con nuestros cursos especializados</p>
    </div>

    <div class="container mt-4 content">
        <div id="promociones" class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8d/Microsoft_Word_2013-2019_logo.svg" class="card-img-top" alt="Curso de Word">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Word</h5>
                        <p class="card-text">Aprende a manejar Microsoft Word de manera profesional.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://apen.es/wp-content/uploads/2020/11/logo-microsoft-excel.jpg" class="card-img-top" alt="Curso de Excel">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Excel</h5>
                        <p class="card-text">Domina las hojas de cálculo y optimiza tu productividad.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2021/12/13/06/33/powerpoint-6867647_640.png" class="card-img-top" alt="Curso de PowerPoint">
                    <div class="card-body">
                        <h5 class="card-title">Curso de PowerPoint</h5>
                        <p class="card-text">Crea presentaciones impactantes con Microsoft PowerPoint.</p>
                        <a href="#" class="btn btn-warning">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Cursos UNAB | Todos los derechos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>