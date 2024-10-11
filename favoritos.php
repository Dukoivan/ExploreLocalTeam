<?php
// Inicia la sesión
session_start(); // Comienza una nueva sesión o reanuda una existente
?>

<!DOCTYPE html>
<html lang="es"> <!-- Define el idioma del documento como español -->

<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración para dispositivos móviles -->

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Estilo de Bootstrap -->
    <link rel="stylesheet" href="assets/css/templatemo.css"> <!-- Estilo de Templatemo -->
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Estilos personalizados -->

    <!-- Cargar fuentes después de renderizar los estilos del diseño -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> <!-- Fuente Roboto -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> <!-- Estilo de Font Awesome -->

    <style>
        /* Animación de deslizamiento y giro en el eje Y para las cartas */
        .card {
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out; /* Transiciones suaves para transformaciones y sombras */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave por defecto */
            border-radius: 10px; /* Bordes redondeados */
            overflow: hidden; /* Evita que el contenido desborde */
            position: relative; /* Posición relativa para efectos de transformación */
            transform: translateY(0) rotateY(0); /* Asegura que la carta esté en su posición inicial */
        }

        .card:hover {
            transform: translateY(-10px) rotateY(10deg); /* Desliza la carta hacia arriba y agrega giro en el eje Y al pasar el mouse */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Aumenta la sombra para dar profundidad */
        }

        /* Efecto de sombra y transformación para los botones dentro de la carta */
        .card .btn {
            transition: opacity 0.3s ease, transform 0.3s ease; /* Transiciones para opacidad y transformaciones */
        }

        .card:hover .btn {
            opacity: 0.9; /* Hace que los botones sean un poco más transparentes al pasar el mouse */
            transform: translateY(-5px); /* Mueve los botones ligeramente hacia arriba */
        }

        /* Estilos personalizados para el botón de eliminar */
        .btn-remove {
            background-color: red; /* Color de fondo rojo */
            border: none; /* Sin borde */
            color: white; /* Color de texto blanco */
            padding: 10px 20px; /* Espaciado interno */
            font-size: 16px; /* Tamaño de fuente */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transiciones para color de fondo y transformaciones */
        }

        /* Cambio de color y pequeño movimiento al pasar el mouse sobre el botón */
        .btn-remove:hover {
            background-color: greenyellow; /* Color de fondo al pasar el mouse */
            transform: translateY(-3px); /* Desplazamiento ligero hacia arriba */
        }
    </style>
</head>

<body>


   <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
            <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Logo de la marca -->
            <span class="ml-2">ExploreLocal</span> <!-- Nombre de la marca -->
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- Icono para activar el menú en dispositivos móviles -->
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../ExploreLocal/indexcuenta.php">Inicio</a> <!-- Enlace a la página de inicio -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ExploreLocal/about.php">Planes</a> <!-- Enlace a la página de planes -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ExploreLocal/shop.php">Locales</a> <!-- Enlace a la página de locales -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ExploreLocal/contact.php">Contactos</a> <!-- Enlace a la página de contactos -->
                    </li>

                    <!-- Condicional de autenticación -->
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        // Usuario está autenticado
                        echo '
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ' . htmlspecialchars($_SESSION['usuario']) . ' <!-- Nombre de usuario -->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../ExploreLocal/subidanegocio.php">Agregar Negocio</a></li>
                                <li><a class="dropdown-item" href="../ExploreLocal/favoritos.php">Favoritos</a></li>
                                <li><a class="dropdown-item" href="../ExploreLocal/logaut/logaut1.php">Cerrar sesión</a></li>
                            </ul>
                        </li>
                        ';
                    } else {
                        // Usuario no está autenticado
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a> <!-- Enlace a login -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a> <!-- Enlace a registro -->
                        </li>
                        ';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->

<!-- Main Content -->
<div class="container">
    <h1 class="my-4">Mis Favoritos</h1> <!-- Título de la sección -->
    <div class="row">
        <!-- Ejemplo de negocio favorito -->
        <!-- Repetir este bloque para cada tarjeta -->
        <?php 
        // Array de negocios favoritos
        $negocios = [
            ["Nombre del Negocio 1", "Descripción breve del negocio 1", "assets/img/example1.jpg"],
            ["Nombre del Negocio 2", "Descripción breve del negocio 2", "assets/img/example2.jpg"],
            ["Nombre del Negocio 3", "Descripción breve del negocio 3", "assets/img/example3.jpg"],
            ["Nombre del Negocio 4", "Descripción breve del negocio 4", "assets/img/example4.jpg"],
            ["Nombre del Negocio 5", "Descripción breve del negocio 5", "assets/img/example5.jpg"],
            ["Nombre del Negocio 6", "Descripción breve del negocio 6", "assets/img/example6.jpg"]
        ];

        // Iterar sobre cada negocio y mostrarlo en una tarjeta
        foreach ($negocios as $negocio) {
            echo '
            <div class="col-md-4 mb-4"> <!-- Columna para cada tarjeta de negocio -->
                <div class="card">
                    <img src="' . $negocio[2] . '" class="card-img-top" alt="' . $negocio[0] . '"> <!-- Imagen del negocio -->
                    <div class="card-body">
                        <h5 class="card-title">' . $negocio[0] . '</h5> <!-- Título del negocio -->
                        <p class="card-text">' . $negocio[1] . '</p> <!-- Descripción del negocio -->
                        <a href="#" class="btn btn-primary">Ver Detalles</a> <!-- Botón para ver detalles -->
                        <a href="#" class="btn btn-remove">Eliminar de Favoritos</a> <!-- Botón para eliminar de favoritos -->
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

    <!-- End Main Content -->

    <!-- Start Footer -->
    <footer class="bg-dark text-light py-5" id="footer">
    <div class="container">
        <div class="row mb-4">
            <!-- Sección de Información de la Empresa -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la empresa -->
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Ubicación de la empresa -->
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone me-2 fs-5"></i> <!-- Icono de teléfono -->
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de teléfono -->
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-2 fs-5"></i> <!-- Icono de correo electrónico -->
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Correo electrónico -->
                    </li>
                </ul>
            </div>
            <!-- Sección de Redes Sociales -->
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i> <!-- Icono de Facebook -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i> <!-- Icono de Instagram -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i> <!-- Icono de Twitter -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i> <!-- Icono de LinkedIn -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div> <!-- Línea divisoria -->
            </div>
        </div>
        <!-- Parte Inferior del Footer -->
        <div class="w-100 bg-black py-3">
            <div class="container text-center">
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. Todos los derechos reservados. <!-- Copyright -->
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Política de Privacidad</a> |
                    <a href="#terms-of-service" class="text-light text-decoration-none">Términos de Servicio</a> <!-- Enlaces a políticas -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
