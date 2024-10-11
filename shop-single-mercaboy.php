<?php
// Inicia la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExploreLocal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Iconos para la app y favicon -->
    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png">

    <!-- Estilos de Bootstrap y otros archivos CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Fuentes de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick para carruseles -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <!-- Encabezado de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo y nombre del sitio -->
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img">
                <span class="ml-2">ExploreLocal</span>
            </a>

            <!-- Botón para colapsar el menú en dispositivos móviles -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/indexcuenta.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/about.php">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/shop.php">Locales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/contact.php">Contactos</a>
                        </li>

                        <!-- Condicional de autenticación para mostrar opciones diferentes si el usuario está autenticado -->
                        <?php
                        if (isset($_SESSION['usuario'])) {
                            // Usuario está autenticado
                            echo '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-icon" style="background-image: url(\'path_to_user_image\');"></div>
                                    ' . htmlspecialchars($_SESSION['usuario']) . '
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
                                <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a>
                            </li>
                             <li class="nav-item">
                            <a href="favoritos.php" class="nav-link" id="heart-link">
                                <i class="fa fa-heart heart-icon"></i>
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
    <!-- Cierre del encabezado -->

    <!-- Modal de búsqueda -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Open Content -->
<section class="bg-light"> <!-- Sección principal con fondo claro -->
    <div class="container pb-5"> <!-- Contenedor principal con padding inferior -->
        <div class="row"> <!-- Fila para organizar las columnas -->
            
            <!-- Columna izquierda con la imagen principal del producto -->
            <div class="col-lg-5 mt-5"> <!-- Columna para la imagen del producto (tamaño grande en pantallas grandes) -->
                <div class="card mb-3"> <!-- Tarjeta que contiene la imagen del producto -->
                    <img class="card-img img-fluid" src="assets/img/mercaboy1.jpg" alt="Card image cap" id="product-detail"> <!-- Imagen del producto -->
                </div>
                
                <div class="row"> <!-- Fila que contiene los controles y el carrusel de imágenes -->
                    
                    <!--Start Controls-->
                    <div class="col-1 align-self-center"> <!-- Columna pequeña para el control de retroceso del carrusel -->
                        <a href="#multi-item-example" role="button" data-bs-slide="prev"> <!-- Enlace para retroceder en el carrusel -->
                            <i class="text-dark fas fa-chevron-left"></i> <!-- Ícono de flecha hacia la izquierda -->
                            <span class="sr-only">Previous</span> <!-- Texto oculto para accesibilidad (descripción de "anterior") -->
                        </a>
                    </div>
                    <!--End Controls-->
                    
                    <!--Start Carousel Wrapper-->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel"> <!-- Carrusel de imágenes del producto (10 columnas de ancho) -->
                        
                        <!--Start Slides-->
                        <div class="carousel-inner product-links-wap" role="listbox"> <!-- Contenedor para las diapositivas del carrusel -->
                            
                            <!--First slide-->
                            <div class="carousel-item active"> <!-- Primer item del carrusel, marcado como activo -->
                                <div class="row"> <!-- Fila para organizar las imágenes en columnas -->
                                    <div class="col-4"> <!-- Columna para la primera imagen en la fila -->
                                        <a href="#"> <!-- Enlace a la imagen -->
                                            <img class="card-img img-fluid" src="assets/img/mercaboy2.jpg" alt="Product Image 1"> <!-- Imagen secundaria del producto -->
                                        </a>
                                    </div>
                                    <div class="col-4"> <!-- Columna para la segunda imagen en la fila -->
                                        <a href="#">
                                            <img class="card-img img-fluid" src="assets/img/mercaboy3.png" alt="Product Image 2"> <!-- Imagen secundaria del producto -->
                                        </a>
                                    </div>
                                    <div class="col-4"> <!-- Columna para la tercera imagen en la fila -->
                                        <a href="#">
                                            <img class="card-img img-fluid" src="assets/img/mercaboy4.jpg" alt="Product Image 3"> <!-- Imagen secundaria del producto -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Segunda diapositiva del carrusel -->
                            <div class="carousel-item"> <!-- Otro item del carrusel -->
                                <div class="row"> <!-- Fila para una sola imagen -->
                                    <div class="col-4"> <!-- Columna para la imagen -->
                                        <a href="#">
                                            <img class="card-img img-fluid" src="assets/img/mercaboy1.jpg" alt="Product Image 1"> <!-- Imagen del producto -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Slides-->
                    </div>
                    <!--End Carousel Wrapper-->
                    
                    <!--Start Controls-->
                    <div class="col-1 align-self-center"> <!-- Columna pequeña para el control de avance del carrusel -->
                        <a href="#multi-item-example" role="button" data-bs-slide="next"> <!-- Enlace para avanzar en el carrusel -->
                            <i class="text-dark fas fa-chevron-right"></i> <!-- Ícono de flecha hacia la derecha -->
                            <span class="sr-only">Next</span> <!-- Texto oculto para accesibilidad (descripción de "siguiente") -->
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
            <!-- Fin de la columna izquierda con la imagen principal del producto -->
            
            <!-- Columna derecha con la información del producto -->
            <div class="col-lg-7 mt-5"> <!-- Columna que contiene los detalles del producto (tamaño grande en pantallas grandes) -->
                <div class="card"> <!-- Tarjeta que contiene el contenido de los detalles -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta donde se presentan los detalles -->
                        
                        <!-- Título del producto -->
                        <h1 class="h2">Mercaboy Mercados y Droguería</h1>
                        
                        <!-- Calificación del producto con estrellas -->
                        <p class="py-2">
                            <i class="fa fa-star text-warning"></i> <!-- Estrella amarilla (calificación positiva) -->
                            <i class="fa fa-star text-warning"></i> <!-- Estrella amarilla (calificación positiva) -->
                            <i class="fa fa-star text-warning"></i> <!-- Estrella amarilla (calificación positiva) -->
                            <i class="fa fa-star text-warning"></i> <!-- Estrella amarilla (calificación positiva) -->
                            <i class="fa fa-star text-secondary"></i> <!-- Estrella gris (sin calificar) -->
                            <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span> <!-- Texto con la calificación y número de comentarios -->
                        </p>
                        
                        <!-- Ubicación del negocio con un mapa de Google integrado -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h5 style="color: green;">Ubicacion:</h5> <!-- Título de ubicación -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.2169839058606!2d-74.03385692636014!3d4.737946941336336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f859852b00db5%3A0xa9aee978ccbc9846!2sMercaboy%20Mercados%20y%20Droguer%C3%ADa!5e1!3m2!1ses-419!2sco!4v1725567793805!5m2!1ses-419!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <!-- Mapa de Google embebido con la ubicación de la tienda -->
                            </li>
                        </ul>

                        <!-- Descripción del producto -->
                        <h5 style="color: green;">Descripcion:</h5> <!-- Título de la sección de descripción -->
                        <p>Mercados y Droguerías Mercaboy, ¡De Boyacá con Amor!, sumercé, encontraras un completo surtido.</p> <!-- Descripción breve del negocio -->
                        
                        <!-- Servicios ofrecidos por el negocio -->
                        <h5 style="color: green;">Servicios:</h5> <!-- Título de la sección de servicios -->
                        <p>Tu destino para productos frescos, alimentos de calidad y artículos para el hogar.</p> <!-- Descripción breve de los servicios -->

                        <!-- Lista vacía para futuros servicios (posiblemente) -->
                        <ul class="list-unstyled pb-3">
                            <li></li> <!-- Elemento vacío de la lista -->
                            <li></li> <!-- Elemento vacío de la lista -->
                            <li></li> <!-- Elemento vacío de la lista -->
                            <li></li> <!-- Elemento vacío de la lista -->
                            <li></li> <!-- Elemento vacío de la lista -->
                            <li></li> <!-- Elemento vacío de la lista -->
                            <li></li> <!-- Elemento vacío de la lista -->
                        </ul>
                        
                    </div>
                </div>
            </div>
            <!-- Fin de la columna derecha con la información del producto -->
        </div>
    </div>
</section>
<!-- Close Content -->


    <!-- Start Article -->
<section class="py-5">
    <div class="container">
        <div class="row text-left p-2 pb-3">
            <h4>Más Tiendas Que Te Pueden Interesar</h4> <!-- Título de la sección de recomendaciones -->
        </div>

        <!-- Start Carousel Wrapper -->
        <div id="carousel-related-product"> <!-- Contenedor del carrusel de productos relacionados -->

            <!-- Primera tarjeta del carrusel -->
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0"> <!-- Contenedor de la tarjeta del producto -->
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/paloquemao.jpg"> <!-- Imagen del supermercado paloquemao -->
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"> <!-- Overlay para los botones sobre la imagen -->
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="favoritos.php"><i class="far fa-heart"></i></a></li> <!-- Botón para añadir a favoritos -->
                                <li><a class="btn btn-success text-white mt-2" href="shop-single-paloquemao.php"><i class="far fa-eye"></i></a></li> <!-- Botón para ver detalles -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="shop-single-paloquemao.php" class="h3 text-decoration-none" style="color: green;">Plaza de Paloquemao</a> <!-- Nombre del supermercado -->
                        <hr>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>Mercado tradicional que ofrece carne, pescado, verduras y una abundancia de frutas y flores coloridas.</li> <!-- Descripción breve -->
                            <li class="pt-2">
                                <!-- Colores disponibles (aunque en este caso son solo círculos sin funcionalidad) -->
                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-center mb-1">
                            <li>
                                <!-- Estrellas para la calificación -->
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                        </ul>
                        <p class="text-center"><a class="btn btn-success" href="shop-single-paloquemao.php">Ver Mas...</a></p> <!-- Botón para más detalles -->
                    </div>
                </div>
            </div>

            <!-- Segunda tarjeta del carrusel -->
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0"> <!-- Contenedor de la tarjeta del producto -->
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/merkacol.jpg"> <!-- Imagen del supermercado merkacol -->
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"> <!-- Overlay para los botones sobre la imagen -->
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="favoritos.php"><i class="far fa-heart"></i></a></li> <!-- Botón para añadir a favoritos -->
                                <li><a class="btn btn-success text-white mt-2" href="shop-single-merkacol.php"><i class="far fa-eye"></i></a></li> <!-- Botón para ver detalles -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta que contiene el texto -->
                        <a href="shop-single-merkacol.php" class="h3 text-decoration-none" style="color: green;">Supermercado Merkacol</a> <!-- Nombre del supermercado -->
                        <hr>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>!Servicio, Calidad y Buen Precio! Frutas, Verduras, Carnes y Abarrotes, Visitanos ahora.</li> <!-- Descripción breve del supermercado -->
                            <li class="pt-2">
                                <!-- Colores disponibles (aunque en este caso son solo círculos sin funcionalidad) -->
                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <!-- Color rojo -->
                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <!-- Color azul -->
                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <!-- Color negro -->
                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <!-- Color claro -->
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span> <!-- Color verde -->
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-center mb-1">
                            <li>
                                <!-- Estrellas para la calificación -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella amarilla -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella amarilla -->
                                <i class="text-warning fa fa-star"></i> <!-- Estrella amarilla -->
                                <i class="text-muted fa fa-star"></i> <!-- Estrella gris -->
                                <i class="text-muted fa fa-star"></i> <!-- Estrella gris -->
                            </li>
                        </ul>
                        <p class="text-center"><a class="btn btn-success" href="shop-single-merkacol.php">Ver Mas...</a></p> <!-- Botón para más detalles -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fin del articulo -->


<!-- Start Footer -->
       
<footer class="bg-dark text-light py-5" id="footer"> <!-- Inicio del pie de página -->
    <div class="container">
        <div class="row mb-4">
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Nombre de la empresa con estilo -->
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Ubicación de la empresa -->
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone me-2 fs-5"></i> <!-- Icono de teléfono -->
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de contacto -->
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-2 fs-5"></i> <!-- Icono de correo electrónico -->
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Correo electrónico de contacto -->
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Sección de íconos de redes sociales -->
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
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3"> <!-- Sección inferior del pie de página -->
            <div class="container text-center">
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Derechos de autor -->
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | <!-- Enlace a la política de privacidad -->
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a> <!-- Enlace a los términos de servicio -->
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- End Footer -->
<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script> <!-- Archivo JavaScript de jQuery -->
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!-- Archivo de migración de jQuery -->
<script src="assets/js/bootstrap.bundle.min.js"></script> <!-- Archivo JavaScript de Bootstrap -->
<script src="assets/js/templatemo.js"></script> <!-- Archivo JavaScript personalizado de Templatemo -->
<script src="assets/js/custom.js"></script> <!-- Archivo JavaScript personalizado -->
<!-- End Script -->

<!-- map Script -->
<script src="assets/js/slick.min.js"></script> <!-- Archivo JavaScript para el carrusel -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> <!-- API de Google Maps -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Archivo JavaScript de jQuery (versión 3.6.0) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> <!-- Archivo JavaScript para el carrusel Slick -->
<script src="assets/js/script.js"></script> <!-- Archivo JavaScript adicional -->
<script>
    // Inicialización del carrusel relacionado
    $('#carousel-related-product').slick({
        infinite: true, // Carrusel infinito
        arrows: false, // Sin flechas de navegación
        slidesToShow: 4, // Número de diapositivas mostradas
        slidesToScroll: 3, // Número de diapositivas a desplazar
        dots: true, // Mostrar puntos de navegación
        responsive: [{ // Configuración responsiva
                breakpoint: 1024, // Ajuste para pantallas de hasta 1024px
                settings: {
                    slidesToShow: 3, // Muestra 3 diapositivas
                    slidesToScroll: 3 // Desplaza 3 diapositivas
                }
            },
            {
                breakpoint: 600, // Ajuste para pantallas de hasta 600px
                settings: {
                    slidesToShow: 2, // Muestra 2 diapositivas
                    slidesToScroll: 3 // Desplaza 3 diapositivas
                }
            },
            {
                breakpoint: 480, // Ajuste para pantallas de hasta 480px
                settings: {
                    slidesToShow: 2, // Muestra 2 diapositivas
                    slidesToScroll: 3 // Desplaza 3 diapositivas
                }
            }
        ]
    });
</script>
<!-- End Slider Script -->
</body>
</html>
