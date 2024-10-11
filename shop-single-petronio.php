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
    <section class="bg-light"> <!-- Inicia una sección con un fondo claro -->
        <div class="container pb-5"> <!-- Contenedor que aplica padding-bottom de 5 unidades -->
            <div class="row"> <!-- Fila que organiza el contenido en formato de columnas -->
                <div class="col-lg-5 mt-5"> <!-- Columna que ocupa 5/12 del ancho en pantallas grandes y aplica un margen superior de 5 unidades -->
                    <div class="card mb-3"> <!-- Tarjeta con margen inferior de 3 unidades -->
                        <img class="card-img img-fluid" src="assets/img/petronio.jpg" alt="Card image cap" id="product-detail"> <!-- Imagen fluida que se adapta al contenedor con un ID específico -->
                    </div>
                    <div class="row"> <!-- Segunda fila dentro de la columna para organizar los controles y el carrusel -->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center"> <!-- Columna de 1/12 del ancho para alinear el control izquierdo verticalmente al centro -->
                            <a href="#multi-item-example" role="button" data-bs-slide="prev"> <!-- Enlace que controla el carrusel, moviéndolo al slide anterior -->
                                <i class="text-dark fas fa-chevron-left"></i> <!-- Ícono de chevron izquierdo (flecha) -->
                                <span class="sr-only">Previous</span> <!-- Texto alternativo para lectores de pantalla -->
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel"> <!-- Columna que contiene el carrusel, que ocupa 10/12 del ancho, con ID específico y propiedades de carrusel de Bootstrap -->
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox"> <!-- Contenedor para los elementos del carrusel -->

                                <!--First slide-->
                                <div class="carousel-item active"> <!-- Primer slide activo por defecto -->
                                    <div class="row"> <!-- Fila para organizar las imágenes en formato de columnas -->
                                        <div class="col-4"> <!-- Columna de 4/12 del ancho para la imagen -->
                                            <a href="#"> <!-- Enlace vacío -->
                                                <img class="card-img img-fluid" src="assets/img/petronio2.jpg" alt="Product Image 1"> <!-- Imagen fluida del producto -->
                                            </a>
                                        </div>
                                        <div class="col-4"> <!-- Segunda imagen del primer slide -->
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/petronio3.jpg" alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4"> <!-- Tercera imagen del primer slide -->
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/petronio5.jpg" alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item"> <!-- Segundo slide del carrusel -->
                                    <div class="row"> <!-- Fila que organiza la imagen en columnas -->
                                        <div class="col-4"> <!-- Columna de 4/12 con una sola imagen en este slide -->
                                            <a href="#">
                                                <img class="card-img img-fluid" src="assets/img/petronio.jpg" alt="Product Image 1"> <!-- Imagen fluida -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center"> <!-- Columna de 1/12 del ancho para el control derecho del carrusel -->
                            <a href="#multi-item-example" role="button" data-bs-slide="next"> <!-- Enlace que mueve el carrusel al siguiente slide -->
                                <i class="text-dark fas fa-chevron-right"></i> <!-- Ícono de chevron derecho (flecha) -->
                                <span class="sr-only">Next</span> <!-- Texto alternativo para lectores de pantalla -->
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5"> <!-- Segunda columna ocupando 7/12 del ancho para la información del producto -->
                    <div class="card"> <!-- Tarjeta para contener el detalle del producto -->
                        <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                            <h1 class="h2">Petronio Cocina De Autor</h1> <!-- Título del producto -->

                            <p class="py-2"> <!-- Párrafo con padding vertical -->
                                <i class="fa fa-star text-warning"></i> <!-- Estrella de rating con color de advertencia (amarillo) -->
                                <i class="fa fa-star text-warning"></i> <!-- Segunda estrella -->
                                <i class="fa fa-star text-warning"></i> <!-- Tercera estrella -->
                                <i class="fa fa-star text-warning"></i> <!-- Cuarta estrella -->
                                <i class="fa fa-star text-secondary"></i> <!-- Quinta estrella en color secundario (gris) -->
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span> <!-- Texto del rating y número de comentarios -->
                            </p>
                            <ul class="list-inline"> <!-- Lista en línea -->
                                <li class="list-inline-item">
                                    <h5 style="color: green;">Ubicacion:</h5> <!-- Encabezado de ubicación con estilo en verde -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12406.02470314423!2d-74.0614368!3d4.6730393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b6f0c3b235b%3A0xeff61a63f0cab697!2sPetronio%20Cocina%20de%20autor!5e1!3m2!1ses-419!2sco!4v1728665698833!5m2!1ses-419!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <!-- Mapa embebido de Google Maps con las coordenadas del restaurante -->
                                </li>
                            </ul>

                            <h5 style="color: green;">Descripcion:</h5> <!-- Encabezado de descripción -->
                            <p>En Petronio - Cocina de autor cada uno de nuestros platos están inspirados en Colombia...</p> <!-- Descripción del restaurante -->

                            <h5 style="color: green;">Servicios:</h5> <!-- Encabezado de servicios -->
                            <p>TIPOS DE COMIDA Mariscos, Colombiana, dietas especiales, opciones veganas</p> <!-- Descripción de los servicios ofrecidos -->
                            <ul class="list-unstyled pb-3"> <!-- Lista no estilizada con padding-bottom -->
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
            </div>
        </div>
    </section>
<!-- Close Content -->


    <!-- Start Article -->
<section class="py-5">
    <div class="container">
        <div class="row text-left p-2 pb-3">
            <h4>Más Restaurantes Que Te Pueden Interesar</h4> <!-- Título de la sección de recomendaciones -->
        </div>

        <!-- Start Carousel Wrapper -->
        <div id="carousel-related-product"> <!-- Contenedor del carrusel de productos relacionados -->

            <!-- Primera tarjeta del carrusel -->
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0"> <!-- Contenedor de la tarjeta del producto -->
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/omm.jpg"> <!-- Imagen del restaurante Omm -->
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"> <!-- Overlay para los botones sobre la imagen -->
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="favoritos.php"><i class="far fa-heart"></i></a></li> <!-- Botón para añadir a favoritos -->
                                <li><a class="btn btn-success text-white mt-2" href="shop-single-omm.php"><i class="far fa-eye"></i></a></li> <!-- Botón para ver detalles -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta que contiene el texto -->
                        <a href="shop-single-omm.php" class="h3 text-decoration-none" style="color: green;">Omm</a> <!-- Nombre del restaurante -->
                        <hr>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>lugar ideal para reencontrarse con los amigos del alma, compartir entre todos comida asiática.</li> <!-- Descripción breve del restaurante -->
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
                        <p class="text-center"><a class="btn btn-success" href="shop-single-omm.php">Ver Mas...</a></p> <!-- Botón para más detalles -->
                    </div>
                </div>
            </div>

            <!-- Segunda tarjeta del carrusel -->
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0"> <!-- Contenedor de la tarjeta del producto -->
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/tierra.jpg"> <!-- Imagen del restaurante tierra roca -->
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center"> <!-- Overlay para los botones sobre la imagen -->
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="favoritos.php"><i class="far fa-heart"></i></a></li> <!-- Botón para añadir a favoritos -->
                                <li><a class="btn btn-success text-white mt-2" href="shop-single-tierraroca.php"><i class="far fa-eye"></i></a></li> <!-- Botón para ver detalles -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body"> <!-- Cuerpo de la tarjeta que contiene el texto -->
                        <a href="shop-single-tierraroca.php" class="h3 text-decoration-none" style="color: green;">Tierra Roca</a> <!-- Nombre del restaurante -->
                        <hr>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>Comida latina, contemporánea, colombiana; dietas especiales.</li> <!-- Descripción breve del restaurante -->
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
                        <p class="text-center"><a class="btn btn-success" href="shop-single-tierraroca.php">Ver Mas...</a></p> <!-- Botón para más detalles -->
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
