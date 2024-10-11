<?php
session_start(); // Inicia la sesión para el manejo de usuarios
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Establece la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace que la página sea responsiva -->

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="assets/css/templatemo.css"> <!-- Estilos de la plantilla -->
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Estilos personalizados -->

    <!-- Cargar fuentes después de renderizar los estilos de la plantilla -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> <!-- Fuente Roboto -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> <!-- Estilos de Font Awesome -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow"> <!-- Barra de navegación -->
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php"> <!-- Logo de la marca -->
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Imagen del logo -->
                <span class="ml-2">ExploreLocal</span> <!-- Nombre de la marca -->
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!-- Botón para colapsar el menú -->
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Menú de navegación -->
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
                                    <div class="user-icon" style="background-image: url(\'path_to_user_image\');"></div>
                                    ' . htmlspecialchars($_SESSION['usuario']) . ' <!-- Muestra el nombre del usuario -->
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../ExploreLocal/subidanegocio.php">Agregar Negocio</a></li> <!-- Enlace para agregar un negocio -->
                                    <li><a class="dropdown-item" href="../ExploreLocal/favoritos.php">Favoritos</a></li> <!-- Enlace a favoritos -->
                                    <li><a class="dropdown-item" href="../ExploreLocal/logaut/logaut1.php">Cerrar sesión</a></li> <!-- Enlace para cerrar sesión -->
                                </ul>
                            </li>
                            ';
                        } else {
                            // Usuario no está autenticado
                            echo '
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a> <!-- Enlace para iniciar sesión -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a> <!-- Enlace para registrarse -->
                            </li>
                             <li class="nav-item">
                            <a href="favoritos.php" class="nav-link" id="heart-link"> <!-- Enlace a favoritos -->
                                <i class="fa fa-heart heart-icon"></i> <!-- Icono de corazón -->
                            </a>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Cierre del Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal de búsqueda -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Botón para cerrar el modal -->
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ..."> <!-- Campo de búsqueda -->
                    <button type="submit" class="input-group-text bg-success text-light"> <!-- Botón de búsqueda -->
                        <i class="fa fa-fw fa-search text-white"></i> <!-- Icono de búsqueda -->
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Inicio de la Página de Contenido -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contactos Infinity</h1> <!-- Título de la sección -->
            <p>
                Dinos tus inconvenientes con nuestra pagina o servicios <!-- Mensaje para el usuario -->
            </p>
        </div>
    </div>


<!-- Start Map -->
<div class="map-container">
<style>
    /* Estilo básico para centrar el iframe en la página */
    .map-container {
        text-align: center; /* Centra el contenido dentro del contenedor */
        margin: 20px; /* Margen alrededor del contenedor */
    }
    iframe {
        border: 0; /* Elimina el borde del iframe */
    }
</style>

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31796.404217183986!2d-74.470206!3d5.01404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409a46b61023ff%3A0x82094f500526ecb4!2sVilleta%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1724362127878!5m2!1ses!2sco" 
        width="800"  <!-- Ancho del iframe -->
        height="600" <!-- Altura del iframe -->
        style="border:0;" 
        allowfullscreen="" <!-- Permitir pantalla completa -->
        loading="lazy" <!-- Carga perezosa del iframe -->
        referrerpolicy="no-referrer-when-downgrade"> <!-- Política de referencia -->
    </iframe>
</div>
<!-- End Map -->

<!-- Start Contact -->
<div class="container py-5"> <!-- Contenedor para la sección de contacto -->
    <div class="row py-5"> <!-- Fila para el formulario -->
        <form class="col-md-9 m-auto" method="post" role="form"> <!-- Formulario de contacto -->
            <div class="row">
                <div class="form-group col-md-6 mb-3"> <!-- Campo para el nombre -->
                    <label for="inputname">Nombre</label>
                    <input type="text" class="form-control mt-1" id="name" name="" placeholder=""> <!-- Entrada de texto para el nombre -->
                </div>
                <div class="form-group col-md-6 mb-3"> <!-- Campo para el email -->
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="" placeholder=""> <!-- Entrada de texto para el email -->
                </div>
            </div>
            <div class="mb-3"> <!-- Campo para el motivo -->
                <label for="inputsubject">Motivo</label>
                <input type="text" class="form-control mt-1" id="subject" name="" placeholder=""> <!-- Entrada de texto para el motivo -->
            </div>
            <div class="mb-3"> <!-- Campo para el mensaje -->
                <label for="inputmessage">Mensaje</label>
                <textarea class="form-control mt-1" id="message" name="" placeholder="" rows="8"></textarea> <!-- Área de texto para el mensaje -->
            </div>
            <div class="row">
                <div class="col text-end mt-2"> <!-- Columna para el botón de enviar -->
                    <button type="submit" class="btn btn-success btn-lg px-3">Enviar</button> <!-- Botón para enviar el formulario -->
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact -->

<!-- Start Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Pie de página -->
    <div class="container">
        <div class="row mb-4">
            <!-- Sección de Información de la Empresa -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la empresa -->
                <ul class="list-unstyled mt-4"> <!-- Lista de información de contacto -->
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Ubicación -->
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
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Contenedor para los íconos de redes sociales -->
                    <ul class="list-inline mb-0"> <!-- Lista de íconos de redes sociales -->
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
        <!-- Parte Inferior del Pie de Página -->
        <div class="w-100 bg-black py-3">
            <div class="container text-center">
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Derechos reservados -->
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> |  <!-- Enlace a la política de privacidad -->
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a> <!-- Enlace a los términos del servicio -->
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- JavaScript opcional para el año dinámico -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear(); // Establece el año actual en el elemento con id 'current-year'
</script>

<!-- Incluir Font Awesome (si no se incluye en otra parte) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- CSS opcional para estilos adicionales -->
<style>
    #footer {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente para el pie de página */
    }
    .logo {
        font-family: 'Arial', sans-serif; /* Fuente para el logotipo */
    }
    .text-light a {
        color: #e0e0e0; /* Color de los enlaces en el texto claro */
    }
    .text-light a:hover {
        color: #b0b0b0; /* Color al pasar el cursor sobre los enlaces */
        text-decoration: underline; /* Subrayado al pasar el cursor */
    }
    .fs-5 {
        font-size: 1.25rem; /* Tamaño de fuente para la clase 'fs-5' */
    }
</style>

<!-- Fin del pie de página -->

<!-- Iniciar Scripts -->
<script src="assets/js/jquery-1.11.0.min.js"></script> <!-- Incluye jQuery -->
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!-- Incluye jQuery Migrate -->
<script src="assets/js/bootstrap.bundle.min.js"></script> <!-- Incluye Bootstrap -->
<script src="assets/js/templatemo.js"></script> <!-- Script específico de Templatemo -->
<script src="assets/js/custom.js"></script> <!-- Script personalizado -->

<!-- Script para el mapa -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> <!-- Script de la API de Google Maps -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluye una versión más reciente de jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> <!-- Incluye Slick Carousel -->
<script src="../public/js/script.js"></script> <!-- Script personalizado para la funcionalidad de la página -->

<!-- Fin de los Scripts -->
</body>

</html>
