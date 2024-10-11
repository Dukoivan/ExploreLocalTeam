<?php
// Inicia la sesión
session_start(); // Permite usar variables de sesión para almacenar información del usuario
?>

<!DOCTYPE html>
<html lang="en"> <!-- Define el lenguaje del documento como inglés -->

<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Especifica la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configura el viewport para dispositivos móviles -->

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Favicon para la pestaña del navegador -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <!-- Hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="assets/css/templatemo.css"> <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="assets/css/custom.css"> <!-- Hoja de estilos personalizada adicional -->

    <!-- Carga estilos de fuentes después de renderizar los estilos de la página -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> <!-- Fuentes de Google -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> <!-- Hoja de estilos de Font Awesome para iconos -->

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css"> <!-- Hoja de estilos para el carrusel Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"> <!-- Tema de estilos para el carrusel Slick -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow"> <!-- Navegación de la barra superior -->
        <div class="container d-flex justify-content-between align-items-center"> <!-- Contenedor flexible para la barra de navegación -->
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php"> <!-- Logo y enlace al inicio -->
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Imagen del logo -->
                <span class="ml-2">ExploreLocal</span> <!-- Nombre de la marca -->
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!-- Botón para expandir o colapsar el menú -->
                <span class="navbar-toggler-icon"></span> <!-- Icono del botón -->
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav"> <!-- Contenido del menú colapsable -->
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Lista de elementos de navegación -->
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
                        if (isset($_SESSION['usuario'])) { // Verifica si hay un usuario autenticado
                            // Usuario está autenticado
                            echo '
                            <li class="nav-item dropdown"> <!-- Elemento de menú desplegable para el usuario autenticado -->
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <!-- Enlace del menú desplegable -->
                                    <div class="user-icon" style="background-image: url(\'path_to_user_image\');"></div> <!-- Icono de usuario -->
                                    ' . htmlspecialchars($_SESSION['usuario']) . ' <!-- Muestra el nombre del usuario autenticado -->
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> <!-- Menú desplegable -->
                                    <li><a class="dropdown-item" href="../ExploreLocal/subidanegocio.php">Agregar Negocio</a></li> <!-- Enlace para agregar negocio -->
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
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal para búsqueda -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Botón para cerrar el modal -->
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0"> <!-- Formulario de búsqueda -->
                <div class="input-group mb-2"> <!-- Grupo de entrada para búsqueda -->
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ..."> <!-- Campo de texto para búsqueda -->
                    <button type="submit" class="input-group-text bg-success text-light"> <!-- Botón de búsqueda -->
                        <i class="fa fa-fw fa-search text-white"></i> <!-- Icono de búsqueda -->
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Open Content -->
    <section class="bg-light"> <!-- Sección principal del contenido -->
        <div class="container pb-5"> <!-- Contenedor para el contenido -->
            <div class="row"> <!-- Fila para los elementos -->
                <div class="col-lg-5 mt-5"> <!-- Columna para la imagen del producto -->
                    <div class="card mb-3"> <!-- Tarjeta para la imagen -->
                        <img class="card-img img-fluid" src="assets/img/estelar1.jpg" alt="Card image cap" id="product-detail"> <!-- Imagen del producto -->
                    </div>
                    <div class="row"> <!-- Fila para los controles del carrusel -->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center"> <!-- Columna para el control izquierdo -->
                            <a href="#multi-item-example" role="button" data-bs-slide="prev"> <!-- Enlace para la diapositiva anterior -->
                                <i class="text-dark fas fa-chevron-left"></i> <!-- Icono de flecha izquierda -->
                                <span class="sr-only">Previous</span> <!-- Texto alternativo para accesibilidad -->
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel"> <!-- Contenedor del carrusel -->
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox"> <!-- Contenedor para las diapositivas del carrusel -->

                                <!--First slide-->
                                <div class="carousel-item active"> <!-- Primera diapositiva activa -->
                                    <div class="row"> <!-- Fila para las imágenes del carrusel -->
                                        <div class="col-4"> <!-- Columna para la primera imagen -->
                                            <a href="#"> <!-- Enlace para la imagen -->
                                                <img class="card-img img-fluid" src="assets/img/estelar2.jpg" alt="Product Image 1"> <!-- Imagen del producto -->
                                            </a>
                                        </div>
                                        <div class="col-4"> <!-- Columna para la segunda imagen -->
                                            <a href="#"> <!-- Enlace para la imagen -->
                                                <img class="card-img img-fluid" src="assets/img/estelar3.jpg" alt="Product Image 2"> <!-- Imagen del producto -->
                                            </a>
                                        </div>
                                        <div class="col-4"> <!-- Columna para la tercera imagen -->
                                            <a href="#"> <!-- Enlace para la imagen -->
                                                <img class="card-img img-fluid" src="assets/img/estelar4.jpg" alt="Product Image 3"> <!-- Imagen del producto -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item"> <!-- Segunda diapositiva -->
                                    <div class="row"> <!-- Fila para las imágenes -->
                                        <div class="col-4"> <!-- Columna para la imagen -->
                                            <a href="#"> <!-- Enlace para la imagen -->
                                                <img class="card-img img-fluid" src="assets/img/estelar1.jpg" alt="Product Image 1"> <!-- Imagen del producto -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center"> <!-- Columna para el control derecho -->
                            <a href="#multi-item-example" role="button" data-bs-slide="next"> <!-- Enlace para la diapositiva siguiente -->
                                <i class="text-dark fas fa-chevron-right"></i> <!-- Icono de flecha derecha -->
                                <span class="sr-only">Next</span> <!-- Texto alternativo para accesibilidad -->
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5"> <!-- Columna para los detalles del producto -->
                    <div class="card"> <!-- Tarjeta para detalles -->
                        <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                            <h1 class="h2">Estelar Suites Jones</h1> <!-- Título del producto -->
                            <p class="py-2"> <!-- Evaluación y comentarios -->
                                <i class="fa fa-star text-warning"></i> <!-- Icono de estrella -->
                                <i class="fa fa-star text-warning"></i> <!-- Icono de estrella -->
                                <i class="fa fa-star text-warning"></i> <!-- Icono de estrella -->
                                <i class="fa fa-star text-warning"></i> <!-- Icono de estrella -->
                                <i class="fa fa-star text-secondary"></i> <!-- Icono de estrella gris para la calificación -->
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span> <!-- Calificación y número de comentarios -->
                            </p>
                            <ul class="list-inline"> <!-- Lista de información adicional -->
                                <li class="list-inline-item"> <!-- Ubicación -->
                                    <h5 style="color: green;">Ubicacion:</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7953.41748686308!2d-74.06280902636051!3d4.645948542132567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a38af7ac06d%3A0xce52cdd7604c5162!2sESTELAR%20Suites%20Jones%20Hotel!5e0!3m2!1ses!2sus!4v1725379530806!5m2!1ses!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <!-- Mapa embebido de Google Maps -->
                                </li>
                            </ul>
                            <h5 style="color: green;">Descripcion:</h5>
                            <p>El Hotel está ubicado en Chapinero Alto barrio de fácil acceso gracias a sus corredores viales como lo son la Carrera Séptima, Avenida 39, la carrera 5ta y la avenida circunvalar, los cuales reducen los tiempos de recorrido entre el sur , centro histórico y norte de la ciudad. Su estratégica ubicación a pocas cuadras del eje financiero de la ciudad, lo hace el Hotel ideal para el desarrollo de sus negocios, eventos y reuniones en Bogotá. Al entrar al Hotel Estelar Suites Jones se sentirá inmediatamente atraído por los encantos únicos de este Hotel. Durante el día lo espera nuestro restaurante Sankara, concepto gastronómico mediterráneo que resalta la comida saludable y creativa; al terminar la tarde podrá disfrutar de un café o coctel en nuestro Lobby Bar, al mejor estilo Bogotano. Los acogedores espacios del Hotel Estelar Suites Jones, la calidez de nuestro equipo de colaboradores, sus amplias, tranquilas y cómodas habitaciones harán de su estadía en Bogotá una experiencia inolvidable.</p> <!-- Descripción del hotel -->
                            <h5 style="color: green;">Servicios:</h5>
                            <p>Estacionamiento gratis, internet de alta velocidad gratuito (WiFi), gimnasio/sala de entrenamiento, desayuno gratis, transporte al aeropuerto, centro de negocios con acceso a internet, instalaciones para conferencias, almacenamiento de equipaje, garaje de estacionamientos, wifi, bar/salón, cafetería, restaurante, desayuno bufet, desayuno en la habitación, bar de aperitivos, salón de banquetes, salas de reuniones, conserje, periódico, hotel para no fumadores, recepción disponible las 24 horas, limpieza en seco, servicio de lavandería, servicio de planchado.</p> <!-- Servicios ofrecidos por el hotel -->
                            <ul class="list-unstyled pb-3"> <!-- Lista para información adicional (actualmente vacía) -->
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                                </div>
                            </form>
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
            <h4>Más Hoteles Que Te Pueden Interesar</h4> <!-- Título de la sección de recomendaciones -->
        </div>

        <!-- Start Carousel Wrapper -->
        <div id="carousel-related-product">

            <!-- Primera tarjeta del carrusel -->
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/lancaster.jpg"> <!-- Imagen del Hotel Lancaster -->
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="favoritos.php"><i class="far fa-heart"></i></a></li> <!-- Botón para añadir a favoritos -->
                                <li><a class="btn btn-success text-white mt-2" href="shop-single-lancaster.php"><i class="far fa-eye"></i></a></li> <!-- Botón para ver detalles -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="shop-single-lancaster.php" class="h3 text-decoration-none" style="color: green;">Hotel Lancaster House</a> <!-- Nombre del hotel -->
                        <hr>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>Hotel completamente amoblado, además con terrazas privadas en el segundo piso.</li> <!-- Descripción breve -->
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
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                        </ul>
                        <p class="text-center"><a class="btn btn-success" href="shop-single-lancaster.php">Ver Mas...</a></p> <!-- Botón para más detalles -->
                    </div>
                </div>
            </div>

            <!-- Segunda tarjeta del carrusel -->
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/hilton.jpg"> <!-- Imagen del Hotel Hilton -->
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href="favoritos.php"><i class="far fa-heart"></i></a></li> <!-- Botón para añadir a favoritos -->
                                <li><a class="btn btn-success text-white mt-2" href="shop-single-hilton.php"><i class="far fa-eye"></i></a></li> <!-- Botón para ver detalles -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="shop-single-hilton.php" class="h3 text-decoration-none" style="color: green;">Hotel Hilton Garden Inn</a> <!-- Nombre del hotel -->
                        <hr>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>Moderno hotel cerca a un aeropuerto y a unos minutos a pie de la parada de autobús más cercana.</li> <!-- Descripción breve -->
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
                        <p class="text-center"><a class="btn btn-success" href="shop-single-hilton.php">Ver Mas...</a></p> <!-- Botón para más detalles -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fin del articulo -->

<!-- inicio Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Sección del pie de página -->
    <div class="container">
        <div class="row mb-4">
            <!-- Sección de información de la empresa -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Nombre de la empresa -->
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i>
                        <span>Villeta</span> <!-- Ubicación -->
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de contacto -->
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Correo electrónico -->
                    </li>
                </ul>
            </div>
            <!-- Sección de redes sociales -->
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
                <div class="w-100 my-4 border-top border-light"></div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3">
            <div class="container text-center">
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Derechos de autor -->
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a> <!-- Enlaces a políticas y términos -->
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- fin Footer -->

<!-- inicio Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script> <!-- jQuery -->
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script> <!-- Archivo de plantilla -->
<script src="assets/js/custom.js"></script> <!-- Archivo de script personalizado -->
<!-- fin Script -->

<!-- map Script -->
<script src="assets/js/slick.min.js"></script> <!-- Script para el carrusel -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> <!-- Google Maps API -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> <!-- Slick Carousel -->
<script src="assets/js/script.js"></script>
<script>
    // Inicialización del carrusel de productos relacionados
    $('#carousel-related-product').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 3,
        dots: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>
<!-- fin Slider Script -->
</body>
</html>
