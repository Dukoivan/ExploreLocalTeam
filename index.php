<!DOCTYPE html>
<html lang="es">

<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Conjunto de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración de vista para dispositivos móviles -->

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="assets/css/templatemo.css"> <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Hoja de estilos adicional -->

    <!-- Cargar estilos de fuente de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> <!-- Hoja de estilos de Font Awesome -->
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow"> <!-- Barra de navegación -->
        <div class="container d-flex justify-content-between align-items-center"> <!-- Contenedor flex para alinear elementos -->
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php"> <!-- Logo de la marca -->
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Imagen del logo -->
                <span class="ml-2">ExploreLocal</span> <!-- Nombre de la marca -->
            </a>

            <!-- Botón para colapsar la navbar en pantallas pequeñas -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Icono del botón de colapso -->
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav"> <!-- Navegación colapsable -->
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Lista de navegación -->
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/index.php">Inicio</a> <!-- Enlace a la página de inicio -->
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
                        <!-- Links para login y registro -->
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a> <!-- Enlace a la página de login -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a> <!-- Enlace a la página de registro -->
                        </li>
                        <!-- Corazón (favoritos) agregado después de "Register" -->
                        <li class="nav-item">
                            <a href="favoritos.php" class="nav-link" id="heart-link">
                                <i class="fa fa-heart heart-icon"></i> <!-- Icono de corazón para favoritos -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="navbar align-self-center d-flex"> <!-- Sección de búsqueda en la navbar -->
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3"> <!-- Oculta en pantallas grandes -->
                    <div class="input-group">
                        <!-- Campo de búsqueda móvil -->
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Buscar ..."> <!-- Campo de entrada para búsqueda -->
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i> <!-- Icono de búsqueda -->
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </nav>
    <!-- Cerrar Header -->

    <!-- Modal de Búsqueda -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal para búsqueda -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0"> <!-- Formulario dentro del modal -->
                <div class="input-group mb-2">
                    <!-- Campo de búsqueda en el modal -->
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar ..."> <!-- Campo de entrada para búsqueda -->
                    <button type="submit" class="input-group-text bg-success text-light"> <!-- Botón de envío -->
                        <i class="fa fa-fw fa-search text-white"></i> <!-- Icono de búsqueda -->
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Iniciar Banner Principal -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel"> <!-- Carrusel de imágenes -->
        <ol class="carousel-indicators"> <!-- Indicadores del carrusel -->
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li> <!-- Primer indicador -->
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li> <!-- Segundo indicador -->
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li> <!-- Tercer indicador -->
        </ol>
        <div class="carousel-inner"> <!-- Contenedor de elementos del carrusel -->
            <div class="carousel-item active"> <!-- Primer elemento del carrusel -->
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/petronio.jpg" alt=""> <!-- Imagen del primer elemento -->
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Petronio Cocina De Autor</b></h1> <!-- Título del primer elemento -->
                                <p>
                                    En Petronio - Cocina de autor, cada uno de nuestros platos están inspirados en Colombia, su historia, su gente y su cultura. La combinación de modernidad y tendencias con tradición son el punto de encuentro en Petronio. Te invitamos a vivir esta experiencia llena de sabor, historia, música, texturas y aromas. <a rel="sponsored" class="text-success" href="shop-single-petronio.php">Mirar más sobre esto</a>
                                </p> <!-- Descripción del primer elemento -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <!-- Segundo elemento del carrusel -->
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/lancaster.jpg" alt=""> <!-- Imagen del segundo elemento -->
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Hotel Lancaster House</h1> <!-- Título del segundo elemento -->
                                <p>Descubre por qué tantos viajeros ven Lancaster House como el hotel ideal cuando visitan Bogotá.<a rel="sponsored" class="text-success" href="shop-single-lancaster.php">Mirar más sobre esto</a></p> <!-- Descripción del segundo elemento -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <!-- Tercer elemento del carrusel -->
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/paloquemao.jpg" alt=""> <!-- Imagen del tercer elemento -->
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Plaza de Mercado Paloquemao</h1> <!-- Título del tercer elemento -->
                                <p>
                                    La Plaza de Mercado de Paloquemao es un lugar emblemático para el abastecimiento de familias y negocios en Bogotá.<a rel="sponsored" class="text-success" href="shop-single-paloquemao.php">Mirar más sobre esto</a>
                                </p> <!-- Descripción del tercer elemento -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev"> <!-- Control anterior del carrusel -->
            <i class="fas fa-chevron-left"></i> <!-- Icono para control anterior -->
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next"> <!-- Control siguiente del carrusel -->
            <i class="fas fa-chevron-right"></i> <!-- Icono para control siguiente -->
        </a>
    </div>

        <!-- End Banner Hero -->
    
        <!-- Start Categories of The Month -->
        <section class="container py-5"> <!-- Sección principal para las categorías -->
    <div class="row text-center pt-3"> <!-- Fila para el título y descripción -->
        <div class="col-lg-6 m-auto"> <!-- Columna centrada para el título -->
            <h1 class="h1">Categorias</h1> <!-- Título de la sección -->
            <p>
                Sugerencia de Negocios para clientes. <!-- Descripción breve -->
            </p>
        </div>
    </div>
    <div class="row"> <!-- Fila para las tarjetas de categorías -->
        <div class="col-12 col-md-4 p-5 mt-3"> <!-- Tarjeta para Restaurantes -->
            <a href="restaurante.php"><img src="assets/img/restaurant.webp" class="rounded-circle img-fluid border"></a> <!-- Imagen de la categoría -->
            <h5 class="text-center mt-3 mb-3">Restaurantes</h5> <!-- Título de la categoría -->
            <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/restaurante.php">Ver Mas...</a></p> <!-- Botón para ver más -->
        </div>
        <div class="col-12 col-md-4 p-5 mt-3"> <!-- Tarjeta para Hoteles -->
            <a href="hoteles.php"><img src="assets/img/hotel.webp" class="rounded-circle img-fluid border"></a> <!-- Imagen de la categoría -->
            <h2 class="h5 text-center mt-3 mb-3">Hoteles</h2> <!-- Título de la categoría -->
            <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/hoteles.php">Ver Mas...</a></p> <!-- Botón para ver más -->
        </div>
        <div class="col-12 col-md-4 p-5 mt-3"> <!-- Tarjeta para Tiendas -->
            <a href="tiendas.php"><img src="assets/img/supermaket.webp" class="rounded-circle img-fluid border"></a> <!-- Imagen de la categoría -->
            <h2 class="h5 text-center mt-3 mb-3">Tiendas</h2> <!-- Título de la categoría -->
            <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/tiendas.php">Ver Mas...</a></p> <!-- Botón para ver más -->
        </div>
    </div>
</section>
<!-- End Categories of The Month -->

<!-- Start Featured Product -->
<section class="bg-light"> <!-- Sección para productos destacados -->
    <div class="container py-5"> <!-- Contenedor para el contenido -->
        <div class="row text-center py-3"> <!-- Fila para el título y descripción -->
            <div class="col-lg-6 m-auto"> <!-- Columna centrada para el título -->
                <h1 class="h1">Mejores Negocios</h1> <!-- Título de la sección -->
                <p>
                    Emprendimientos que sobresalen en su sector debido a su alta calidad, innovación, rentabilidad y satisfacción del cliente. Estos negocios suelen tener una sólida estrategia de mercado, una gestión efectiva y una capacidad destacada para adaptarse y crecer en un entorno competitivo. <!-- Descripción breve -->
                </p>
            </div>
        </div>
        <div class="row"> <!-- Fila para los productos destacados -->
            <div class="col-12 col-md-4 mb-4"> <!-- Tarjeta para el primer negocio destacado -->
                <div class="card h-100"> <!-- Contenedor de la tarjeta -->
                    <a href="shop-single-omm.php"> <!-- Enlace al negocio -->
                        <img src="assets/img/omm.jpg" class="card-img-top" alt="..."> <!-- Imagen del negocio -->
                    </a>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                        <ul class="list-unstyled d-flex justify-content-between"> <!-- Estrellas de calificación -->
                            <li>
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-muted fa fa-star"></i> <!-- Estrella vacía -->
                                <i class="text-muted fa fa-star"></i> <!-- Estrella vacía -->
                            </li>
                        </ul>
                        <a href="shop-single-omm.php" class="h2 text-decoration-none text-dark">Omm</a> <!-- Título del negocio -->
                        <p class="card-text"> <!-- Descripción del negocio -->
                            OMM es el lugar donde la naturaleza y la energía se confabulan para despertar un estado emocional que conduzca a la felicidad infinita.
                        </p>
                        <p class="text-muted">Reviews (24)</p> <!-- Número de reseñas -->
                        <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-omm.php">Ver Mas...</a></p> <!-- Botón para ver más -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4"> <!-- Tarjeta para el segundo negocio destacado -->
                <div class="card h-100"> <!-- Contenedor de la tarjeta -->
                    <a href="shop-single-hilton.php"> <!-- Enlace al negocio -->
                        <img src="assets/img/hilton.jpg" class="card-img-top" alt="..."> <!-- Imagen del negocio -->
                    </a>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                        <ul class="list-unstyled d-flex justify-content-between"> <!-- Estrellas de calificación -->
                            <li>
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-muted fa fa-star"></i> <!-- Estrella vacía -->
                                <i class="text-muted fa fa-star"></i> <!-- Estrella vacía -->
                            </li>
                        </ul>
                        <a href="shop-single-hilton.php" class="h2 text-decoration-none text-dark">Hotel Hilton Garden Inn Bogota Airport</a> <!-- Título del negocio -->
                        <p class="card-text"> <!-- Descripción del negocio -->
                            Hilton Garden Inn Bogota Airport es una magnífica elección para los viajeros que visitan Bogotá.
                        </p>
                        <p class="text-muted">Reviews (48)</p> <!-- Número de reseñas -->
                        <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-hilton.php">Ver Mas...</a></p> <!-- Botón para ver más -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4"> <!-- Tarjeta para el tercer negocio destacado -->
                <div class="card h-100"> <!-- Contenedor de la tarjeta -->
                    <a href="shop-single-merkacol.php"> <!-- Enlace al negocio -->
                        <img src="assets/img/merkacol.jpg" class="card-img-top" alt="..."> <!-- Imagen del negocio -->
                    </a>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                        <ul class="list-unstyled d-flex justify-content-between"> <!-- Estrellas de calificación -->
                            <li>
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella llena -->
                            </li>
                        </ul>
                        <a href="shop-single-merkacol.php" class="h2 text-decoration-none text-dark">Supermercado Merkacol - AMÉRICAS</a> <!-- Título del negocio -->
                        <p class="card-text"> <!-- Descripción del negocio -->
                            Supermercado MERKACOL Es una empresa colombiana que nace con el fin de satisfacer la demanda de productos esenciales del hogar.
                        </p>
                        <p class="text-muted">Reviews (74)</p> <!-- Número de reseñas -->
                        <p class="text-center"><a class="btn btn-success" href="../ExploreLocal/shop-single-merkacol.php">Ver Mas...</a></p> <!-- Botón para ver más -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Product -->

<!-- Start Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Sección del pie de página -->
    <div class="container"> <!-- Contenedor del pie de página -->
        <div class="row mb-4"> <!-- Fila para información de la empresa y redes sociales -->
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0"> <!-- Sección de información de la empresa -->
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la sección -->
                <ul class="list-unstyled mt-4"> <!-- Lista de información de contacto -->
                    <li class="d-flex align-items-center mb-3"> <!-- Dirección -->
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Nombre de la ubicación -->
                    </li>
                    <li class="d-flex align-items-center mb-3"> <!-- Teléfono -->
                        <i class="fa fa-phone me-2 fs-5"></i> <!-- Icono de teléfono -->
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de teléfono -->
                    </li>
                    <li class="d-flex align-items-center"> <!-- Correo electrónico -->
                        <i class="fa fa-envelope me-2 fs-5"></i> <!-- Icono de correo -->
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Dirección de correo -->
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8"> <!-- Sección de redes sociales -->
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Contenedor para los enlaces de redes -->
                    <ul class="list-inline mb-0"> <!-- Lista de redes sociales -->
                        <li class="list-inline-item mx-2"> <!-- Enlace a Facebook -->
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i> <!-- Icono de Facebook -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Enlace a Instagram -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i> <!-- Icono de Instagram -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Enlace a Twitter -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i> <!-- Icono de Twitter -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Enlace a LinkedIn -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i> <!-- Icono de LinkedIn -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div> <!-- Línea divisoria -->
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3"> <!-- Parte inferior del pie de página -->
            <div class="container text-center"> <!-- Contenedor centrado -->
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Derechos de autor -->
                </p>
                <p class="mb-0"> <!-- Enlaces a políticas -->
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a> <!-- Políticas de privacidad y servicio -->
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript opcional para mostrar el año dinámicamente -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear(); // Asigna el año actual al elemento con ID 'current-year'
</script>

<!-- Incluir Font Awesome (si no se incluye en otro lugar) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Script para usar iconos de Font Awesome -->

<!-- CSS opcional para estilos adicionales -->
<style>
    #footer { 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; // Fuente utilizada en el pie de página
    }
    .logo { 
        font-family: 'Arial', sans-serif; // Fuente utilizada para el logo
    }
    .text-light a { 
        color: #e0e0e0; // Color de los enlaces en el texto claro
    }
    .text-light a:hover { 
        color: #b0b0b0; // Color de los enlaces al pasar el cursor
        text-decoration: underline; // Subrayar los enlaces al pasar el cursor
    }
    .fs-5 { 
        font-size: 1.25rem; // Tamaño de fuente para la clase 'fs-5'
    }
</style>

<!-- End Footer -->

<!-- Iniciar Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script> <!-- Incluir jQuery -->
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!-- Incluir jQuery Migrate -->
<script src="assets/js/bootstrap.bundle.min.js"></script> <!-- Incluir Bootstrap -->
<script src="assets/js/templatemo.js"></script> <!-- Incluir el script principal de Templatemo -->
<script src="assets/js/custom.js"></script> <!-- Incluir script personalizado -->
<!-- End Script -->
</body>

</html>
