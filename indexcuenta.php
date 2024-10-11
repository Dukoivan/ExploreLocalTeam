<?php
// Inicia la sesión para gestionar la autenticación de usuarios y almacenar datos temporales
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExploreLocal</title> <!-- Título de la página que aparece en la pestaña del navegador -->
    <meta charset="utf-8"> <!-- Define el conjunto de caracteres usado en la página -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configura el diseño responsivo para diferentes dispositivos -->

    <!-- Íconos para dispositivos Apple y navegadores -->
    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png"> <!-- Ícono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Ícono de la pestaña del navegador -->

    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Bootstrap para facilitar el diseño y estilo de la página -->
    <link rel="stylesheet" href="assets/css/templatemo.css"> <!-- Hojas de estilo específicas para el diseño del template -->
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Hojas de estilo personalizadas para la aplicación -->

    <!-- Fuentes de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> <!-- Estilo de fuente Roboto -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> <!-- Iconos de Font Awesome para usar en la interfaz -->

    <body>

    <!-- Comienza el encabezado de la página -->
    <nav class="navbar navbar-expand-lg navbar-light shadow"> <!-- Barra de navegación principal -->
        <div class="container d-flex justify-content-between align-items-center"> <!-- Contenedor de la barra de navegación -->
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php"> <!-- Logo y nombre de la aplicación -->
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Muestra el logo de la aplicación -->
                <span class="ml-2">ExploreLocal</span> <!-- Nombre de la aplicación -->
            </a>

            <!-- Botón para colapsar el menú en dispositivos pequeños -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Icono del botón para mostrar/ocultar menú -->
            </button>

            <!-- Sección del menú colapsable -->
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Lista de navegación -->
                        <!-- Enlaces de navegación -->
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
                        if (isset($_SESSION['usuario'])) { // Verifica si el usuario está autenticado
                            // Si el usuario está autenticado, se muestra su nombre y opciones adicionales
                            echo '
                            <li class="nav-item dropdown"> <!-- Elemento de menú desplegable -->
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ' . htmlspecialchars($_SESSION['usuario']) . ' <!-- Muestra el nombre del usuario, escapando caracteres especiales -->
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> <!-- Menú desplegable -->
                                    <li><a class="dropdown-item" href="../ExploreLocal/subidanegocio.php">Agregar Negocio</a></li> <!-- Enlace para agregar un negocio -->
                                    <li><a class="dropdown-item" href="../ExploreLocal/favoritos.php">Favoritos</a></li> <!-- Enlace a favoritos -->
                                    <li><a class="dropdown-item" href="../ExploreLocal/logaut/logaut1.php">Cerrar sesión</a></li> <!-- Enlace para cerrar sesión -->
                                </ul>
                            </li>
                            ';
                        } else {
                            // Si el usuario no está autenticado, se muestran opciones de inicio de sesión
                            echo '
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a> <!-- Enlace para iniciar sesión -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a> <!-- Enlace para registrarse -->
                            </li>
                            <li class="nav-item">
                                <a href="favoritos.php" class="nav-link" id="heart-link"> <!-- Enlace a la sección de favoritos -->
                                    <i class="fa fa-heart heart-icon"></i> <!-- Icono de favoritos -->
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
    <!-- Cierra el Header -->

    <style>
    /* Estilos para el icono del usuario */
    .user-icon {
        width: 40px; /* Ancho del icono */
        height: 40px; /* Alto del icono */
        background-color: #ddd; /* Color de fondo predeterminado */
        border-radius: 50%; /* Hace el icono redondo */
        background-size: cover; /* Cubre el área del icono con la imagen de fondo */
        background-position: center; /* Centra la imagen dentro del icono */
        display: inline-block; /* Permite que el icono se muestre en línea con otros elementos */
        margin-right: 8px; /* Espacio a la derecha del icono */
    }
    </style>
    <!-- Cierra el Header -->

        <!-- Close Header -->
    
        <!-- Modal -->
        <!-- Modal para la búsqueda -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"> <!-- Diálogo modal de tamaño grande -->
        <div class="w-100 pt-1 mb-5 text-right"> <!-- Contenedor para el botón de cierre -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Botón para cerrar el modal -->
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0"> <!-- Formulario de búsqueda -->
            <div class="input-group mb-2"> <!-- Agrupación para el campo de búsqueda y el botón -->
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ..."> <!-- Campo de entrada para la búsqueda -->
                <button type="submit" class="input-group-text bg-success text-light"> <!-- Botón para enviar la búsqueda -->
                    <i class="fa fa-fw fa-search text-white"></i> <!-- Icono de búsqueda -->
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel"> <!-- Carrusel que presenta imágenes destacadas -->
    <ol class="carousel-indicators"> <!-- Indicadores para navegación -->
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li> <!-- Indicador activo para la primera imagen -->
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li> <!-- Indicador para la segunda imagen -->
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li> <!-- Indicador para la tercera imagen -->
    </ol>
    <div class="carousel-inner"> <!-- Contenedor principal del carrusel -->
        <div class="carousel-item active"> <!-- Primer elemento del carrusel (activo por defecto) -->
            <div class="container"> <!-- Contenedor para la disposición del contenido -->
                <div class="row p-5"> <!-- Fila con padding -->
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last"> <!-- Columna para la imagen, centrada en la pantalla -->
                        <img class="img-fluid" src="assets/img/petronio.jpg" alt=""> <!-- Imagen del primer negocio -->
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center"> <!-- Columna para el texto -->
                        <div class="text-align-left align-self-center"> <!-- Alineación del texto a la izquierda -->
                            <h1 class="h1 text-success"><b>Petronio Cocina De Autor</b></h1> <!-- Título destacado -->
                            <p>
                                En Petronio - Cocina de autor cada uno de nuestros platos están inspirados en Colombia, su historia, su gente y su cultura. La combinación de modernidad y tendencias con tradición son el punto de encuentro en Petronio. Te invitamos a vivir esta experiencia llena de sabor, historia, música, texturas y aromas. <a rel="sponsored" class="text-success" href="shop-single-petronio.php" >Mirar más sobre esto</a> <!-- Descripción del negocio con un enlace para más información -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Elementos adicionales del carrusel -->
        <div class="carousel-item"> <!-- Segundo elemento del carrusel -->
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last"> <!-- Imagen centrada -->
                        <img class="img-fluid" src="assets/img/lancaster.jpg" alt=""> <!-- Imagen del segundo negocio -->
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center"> <!-- Columna para el texto -->
                        <div class="text-align-left"> <!-- Alineación del texto -->
                            <h1 class="h1">Hotel Lancaster House</h1> <!-- Título del segundo negocio -->
                            <p>Descubre por qué tantos viajeros ven Lancaster House como el hotel ideal cuando visitan Bogotá.<a rel="sponsored" class="text-success" href="shop-single-lancaster.php" >Mirar más sobre esto</a></p> <!-- Descripción del hotel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item"> <!-- Tercer elemento del carrusel -->
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last"> <!-- Imagen centrada -->
                        <img class="img-fluid" src="assets/img/paloquemao.jpg" alt=""> <!-- Imagen de la plaza de mercado -->
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center"> <!-- Columna para el texto -->
                        <div class="text-align-left"> <!-- Alineación del texto -->
                            <h1 class="h1">Plaza de Mercado Paloquemao</h1> <!-- Título de la plaza -->
                            <p>
                                La Plaza de Mercado de Paloquemao es un lugar emblemático para el abastecimiento de familias y negocios en Bogotá.<a rel="sponsored" class="text-success" href="shop-single-paloquemao.php" >Mirar más sobre esto</a> <!-- Descripción con enlace -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controles del carrusel -->
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev"> <!-- Control para la imagen anterior -->
        <i class="fas fa-chevron-left"></i> <!-- Icono de flecha hacia la izquierda -->
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next"> <!-- Control para la siguiente imagen -->
        <i class="fas fa-chevron-right"></i> <!-- Icono de flecha hacia la derecha -->
    </a>
</div>
<!-- End Banner Hero -->

<!-- Start Categories of The Month -->
<section class="container py-5"> <!-- Sección que muestra las categorías de negocios -->
    <div class="row text-center pt-3"> <!-- Fila centrada para el título -->
        <div class="col-lg-6 m-auto"> <!-- Columna centrada -->
            <h1 class="h1">Categorias</h1> <!-- Título de la sección -->
            <p>
                Sugerencia de Negocios para clientes. <!-- Descripción breve -->
            </p>
        </div>
    </div>
    <div class="row"> <!-- Fila que contiene las categorías -->
        <div class="col-12 col-md-4 p-5 mt-3"> <!-- Primera categoría -->
            <a href="restaurante.php"><img src="assets/img/restaurant.webp" class="rounded-circle img-fluid border"></a> <!-- Imagen de la categoría de restaurantes -->
            <h5 class="text-center mt-3 mb-3">Restaurantes</h5> <!-- Título de la categoría -->
            <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/restaurante.php" >Ver Mas...</a></p> <!-- Botón para ver más -->
        </div>
        <div class="col-12 col-md-4 p-5 mt-3"> <!-- Segunda categoría -->
            <a href="hoteles.php"><img src="assets/img/hotel.webp" class="rounded-circle img-fluid border"></a> <!-- Imagen de la categoría de hoteles -->
            <h2 class="h5 text-center mt-3 mb-3">Hoteles</h2> <!-- Título de la categoría -->
            <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/hoteles.php" >Ver Mas...</a></p> <!-- Botón para ver más -->
        </div>
        <div class="col-12 col-md-4 p-5 mt-3"> <!-- Tercera categoría -->
            <a href="tiendas.php"><img src="assets/img/supermaket.webp" class="rounded-circle img-fluid border"></a> <!-- Imagen de la categoría de tiendas -->
            <h2 class="h5 text-center mt-3 mb-3">Tiendas</h2> <!-- Título de la categoría -->
            <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/tiendas.php" >Ver Mas...</a></p> <!-- Botón para ver más -->
        </div>
    </div>
</section>

        <!-- End Categories of The Month -->
    
        <!-- Start Featured Product -->
   <!-- Sección de Mejores Negocios -->
<section class="bg-light"> <!-- Sección con fondo claro -->
    <div class="container py-5"> <!-- Contenedor con padding vertical -->
        <div class="row text-center py-3"> <!-- Fila centrada con padding -->
            <div class="col-lg-6 m-auto"> <!-- Columna centrada en pantallas grandes -->
                <h1 class="h1">Mejores Negocios</h1> <!-- Título principal -->
                <p>
                    Emprendimientos que sobresalen en su sector debido a su alta calidad, innovación, rentabilidad y satisfacción del cliente. Estos negocios suelen tener una sólida estrategia de mercado, una gestión efectiva y una capacidad destacada para adaptarse y crecer en un entorno competitivo.
                </p> <!-- Descripción de los negocios destacados -->
            </div>
        </div>
        <div class="row"> <!-- Fila que contiene las tarjetas de negocios -->
            <!-- Tarjeta para el primer negocio -->
            <div class="col-12 col-md-4 mb-4"> <!-- Columna que ocupa un tercio en pantallas medianas -->
                <div class="card h-100"> <!-- Tarjeta con altura automática -->
                    <a href="shop-single-omm.php"> <!-- Enlace a la página del negocio -->
                        <img src="assets/img/omm.jpg" class="card-img-top" alt="..."> <!-- Imagen de la tarjeta -->
                    </a>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                        <ul class="list-unstyled d-flex justify-content-between"> <!-- Lista para las estrellas de calificación -->
                            <li>
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i> <!-- Estrella vacía -->
                                <i class="text-muted fa fa-star"></i>
                            </li>
                        </ul>
                        <a href="shop-single-omm.php" class="h2 text-decoration-none text-dark">Omm</a> <!-- Nombre del negocio -->
                        <p class="card-text">
                            OMM es el lugar donde la naturaleza y la energía se confabulan para despertar un estado emocional que conduzca a la felicidad infinita. <!-- Descripción del negocio -->
                        </p>
                        <p class="text-muted">Reviews (24)</p> <!-- Número de reseñas -->
                        <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-omm.php" >Ver Mas...</a></p> <!-- Botón para ver más -->
                    </div>
                </div>
            </div>

            <!-- Tarjeta para el segundo negocio -->
            <div class="col-12 col-md-4 mb-4"> <!-- Columna para el segundo negocio -->
                <div class="card h-100">
                    <a href="shop-single-hilton.php">
                        <img src="assets/img/hilton.jpg" class="card-img-top" alt="..."> <!-- Imagen del hotel -->
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i> <!-- Estrellas de calificación -->
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                        </ul>
                        <a href="shop-single-hilton.php" class="h2 text-decoration-none text-dark">Hotel Hilton Garden Inn Bogota Airport</a> <!-- Nombre del hotel -->
                        <p class="card-text">
                            Hilton Garden Inn Bogota Airport es una magnífica elección para los viajeros que visitan Bogotá. <!-- Descripción del hotel -->
                        </p>
                        <p class="text-muted">Reviews (48)</p> <!-- Número de reseñas -->
                        <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-hilton.php" >Ver Mas...</a></p> <!-- Botón para ver más -->
                    </div>
                </div>
            </div>

            <!-- Tarjeta para el tercer negocio -->
            <div class="col-12 col-md-4 mb-4"> <!-- Columna para el supermercado -->
                <div class="card h-100">
                    <a href="shop-single-merkacol.php">
                        <img src="assets/img/merkacol.jpg" class="card-img-top" alt="..."> <!-- Imagen del supermercado -->
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i> <!-- Estrellas de calificación -->
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                            </li>
                        </ul>
                        <a href="shop-single-merkacol.php" class="h2 text-decoration-none text-dark">Supermercado Merkacol - AMÉRICAS</a> <!-- Nombre del supermercado -->
                        <p class="card-text">
                            Supermercado MERKACOL es una empresa colombiana que nace con el fin de satisfacer la demanda de productos esenciales del hogar. <!-- Descripción del supermercado -->
                        </p>
                        <p class="text-muted">Reviews (74)</p> <!-- Número de reseñas -->
                        <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-merkacol.php" >Ver Mas...</a></p> <!-- Botón para ver más -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Product -->

<!-- Start Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Pie de página con fondo oscuro -->
    <div class="container"> <!-- Contenedor del pie de página -->
        <div class="row mb-4"> <!-- Fila para la información del company -->
            <!-- Sección de Información de la Empresa -->
            <div class="col-md-4 mb-3 mb-md-0"> <!-- Columna para la información de contacto -->
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la empresa -->
                <ul class="list-unstyled mt-4"> <!-- Lista de información de contacto -->
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
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Correo electrónico de contacto -->
                    </li>
                </ul>
            </div>
            <!-- Sección de Redes Sociales -->
            <div class="col-md-8"> <!-- Columna para los enlaces de redes sociales -->
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Contenedor para las redes sociales -->
                    <ul class="list-inline mb-0"> <!-- Lista de iconos de redes sociales -->
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"> <!-- Enlace a Facebook -->
                                <i class="fab fa-facebook-f fa-2x"></i> <!-- Icono de Facebook -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"> <!-- Enlace a Instagram -->
                                <i class="fab fa-instagram fa-2x"></i> <!-- Icono de Instagram -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"> <!-- Enlace a Twitter -->
                                <i class="fab fa-twitter fa-2x"></i> <!-- Icono de Twitter -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"> <!-- Enlace a LinkedIn -->
                                <i class="fab fa-linkedin fa-2x"></i> <!-- Icono de LinkedIn -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div> <!-- Línea divisoria -->
            </div>
        </div>
        <!-- Parte inferior del pie de página -->
        <div class="w-100 bg-black py-3"> <!-- Fondo negro para la parte inferior -->
            <div class="container text-center"> <!-- Contenedor centrado -->
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved.
                </p> <!-- Derechos de autor -->
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | <!-- Enlace a la política de privacidad -->
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a> <!-- Enlace a los términos de servicio -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- JavaScript opcional para mostrar el año actual -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

<!-- Incluir Font Awesome (si no se incluye en otro lugar) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- CSS opcional para estilo adicional -->
<style>
    #footer {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Estilo de fuente para el pie de página */
    }
    .logo {
        font-family: 'Arial', sans-serif; /* Estilo de fuente para el logo */
    }
    .text-light a {
        color: #e0e0e0; /* Color de los enlaces en el texto claro */
    }
    .text-light a:hover {
        color: #b0b0b0; /* Color de los enlaces al pasar el ratón */
        text-decoration: underline; /* Subrayar el enlace al pasar el ratón */
    }
    .fs-5 {
        font-size: 1.25rem; /* Tamaño de fuente definido para la clase fs-5 */
    }
</style>

<!-- Fin del pie de página -->

<!-- Inicio de los scripts -->
<script src="assets/js/jquery-1.11.0.min.js"></script> <!-- Biblioteca jQuery -->
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!-- Plugin para migrar jQuery -->
<script src="assets/js/bootstrap.bundle.min.js"></script> <!-- Biblioteca Bootstrap -->
<script src="assets/js/templatemo.js"></script> <!-- Script específico de la plantilla -->
<script src="assets/js/custom.js"></script> <!-- Script personalizado -->
<!-- Fin de los scripts -->
</body>

</html>
