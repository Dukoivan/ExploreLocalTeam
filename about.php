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

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--<body>
    
    <!- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img">
                <span class="ml-2">ExploreLocal</span>
            </a>

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

                        <!-- Condicional de autenticación -->
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
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get">
                    <div class="modal-body">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                            <button type="submit" class="input-group-text bg-success text-light">
                                <i class="fa fa-fw fa-search text-white"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Modal -->

    <!-- Banner -->
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Planes</h1>
                    <p>
                        Compra nuestros planes para acceder a nuestra página y publicar tu negocio, haciéndolo super famoso.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.svg" alt="About Hero" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Planes Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 mx-auto">
                <h1 class="h1">Planes Disponibles</h1>
                <p>
                    COMPRA YAAAA...
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Barato</h2>
                    <p class="text-center">Plan económico para quienes buscan lo esencial.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Intermedio</h2>
                    <p class="text-center">Un plan equilibrado con características adicionales.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Caro</h2>
                    <p class="text-center">Plan premium con todas las características premium.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Planes Section -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 mx-auto">
                    <h1 class="h1">Marcas</h1>
                    <p>
                        Marcas reconocidas del mercado
                    </p>
                </div>
                <div class="col-lg-9 mx-auto">
                    <div class="row d-flex flex-row">
                        <!-- Controls -->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-carousel" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!-- End Controls -->

                        <!-- Carousel Wrapper -->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-carousel" data-bs-ride="carousel">
                                <!-- Slides -->
                                <div class="carousel-inner product-links-wap" role="listbox">
                                    <!-- First slide -->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/marca1.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/marca2.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/marca3.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/marca4.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End First slide -->

                                    <!-- Second slide -->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/logo1.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/logo2.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/logo3.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/logo4.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Second slide -->
                                </div>
                                <!-- End Slides -->
                            </div>
                        </div>
                        <!-- End Carousel Wrapper -->

                        <!-- Controls -->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-carousel" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!-- End Controls -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Brands -->

    
        <!-- Start Footer -->
       
        <footer class="bg-dark text-light py-5" id="footer">
    <div class="container">
        <div class="row mb-4">
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i>
                        <span>Villeta</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a>
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i>
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
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved.
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript for dynamic year -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

<!-- Include Font Awesome (if not included elsewhere) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Optional CSS for additional styling -->
<style>
    #footer {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .logo {
        font-family: 'Arial', sans-serif;
    }
    .text-light a {
        color: #e0e0e0;
    }
    .text-light a:hover {
        color: #b0b0b0;
        text-decoration: underline;
    }
    .fs-5 {
        font-size: 1.25rem;
    }
</style>

        <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>