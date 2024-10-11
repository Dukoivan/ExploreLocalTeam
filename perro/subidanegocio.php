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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .map-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #f0f0f0;
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

       <!-- Header -->
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
                            <a class="nav-link" href="../ExploreLocal/indexcuenta">Inicio</a>
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
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="assets/img/kfc1.jpg" alt="Card image cap" id="product-detail">
                </div>
                <div class="row">
                    <!-- Start Carousel Wrapper -->
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <!-- Start Slides -->
                        <div class="carousel-inner product-links-wap" role="listbox">
                            <!-- First slide -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#"><img class="card-img img-fluid" src="assets/img/kfc1.jpg" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="card-img img-fluid" src="assets/img/kfc2.jpg" alt="Product Image 2"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="card-img img-fluid" src="assets/img/kfc3.jpg" alt="Product Image 3"></a>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!-- Second slide -->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#"><img class="card-img img-fluid" src="assets/img/product_single_04.jpg" alt="Product Image 4"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="card-img img-fluid" src="assets/img/product_single_05.jpg" alt="Product Image 5"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="card-img img-fluid" src="assets/img/product_single_06.jpg" alt="Product Image 6"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slides -->

                        <!-- Start Controls -->
                        <div class="row">
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <i class="text-dark fas fa-chevron-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="col-10 text-center mt-3">
                                <!-- Botón para agregar imágenes -->
                                <input type="file" id="imageUpload" multiple accept="image/*" style="display:none;" onchange="uploadImages()">
                                <button type="button" class="btn btn-primary" onclick="document.getElementById('imageUpload').click()">Agregar Imágenes</button>
                            </div>
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <i class="text-dark fas fa-chevron-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Controls -->
                    </div>
                    <!-- End Carousel Wrapper -->
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- Sección para agregar la descripción -->
                        <h5 class="card-title" contenteditable="true">Nombre del Local</h5>
                        <h5 class="card-title">Descripción</h5>
                        <p class="card-text" contenteditable="true">Descripción del local aquí...</p>

                        <!-- Sección para agregar la ubicación -->
                        <h6>Agregar URL del Mapa:</h6>
                        <input type="text" id="mapUrlInput" class="form-control mb-2" placeholder="Pega aquí la URL del iframe">
                        <button type="button" class="btn btn-primary" onclick="addMapUrl()">Agregar Mapa</button>
                        <div id="mapContainer" class="map-container mt-3"></div>

                        <!-- Sección para agregar los servicios -->
                        <h5 class="card-title">Servicios</h5>
                        <ul contenteditable="true">
                            <li>Servicio 1</li>
                            <li>Servicio 2</li>
                            <li>Servicio 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Close Content -->

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

    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
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

        function uploadImages() {
        var files = document.getElementById('imageUpload').files;
        var carouselInner = document.querySelector('#multi-item-example .carousel-inner');

        Array.from(files).forEach(file => {
            var reader = new FileReader();
            reader.onload = function(e) {
                var currentSlide = carouselInner.querySelector('.carousel-item.active');
                if (!currentSlide || currentSlide.querySelectorAll('.row > .col-4').length >= 3) {
                    var newSlide = document.createElement('div');
                    newSlide.className = 'carousel-item';
                    var row = document.createElement('div');
                    row.className = 'row';
                    newSlide.appendChild(row);
                    carouselInner.appendChild(newSlide);
                    currentSlide = newSlide;
                }

                var row = currentSlide.querySelector('.row');
                var col = document.createElement('div');
                col.className = 'col-4';
                var link = document.createElement('a');
                link.href = '#';
                var img = document.createElement('img');
                img.className = 'card-img img-fluid';
                img.src = e.target.result;
                link.appendChild(img);
                col.appendChild(link);
                row.appendChild(col);

                if (row.children.length > 3) {
                    currentSlide.classList.remove('active');
                    currentSlide = row.parentElement.parentElement.nextElementSibling || carouselInner.firstElementChild;
                    currentSlide.classList.add('active');
                }
            };
            reader.readAsDataURL(file);
        });
    }

    function addMapUrl() {
        var mapUrl = document.getElementById('mapUrlInput').value;
        var mapContainer = document.getElementById('mapContainer');

        mapContainer.innerHTML = '';

        if (mapUrl) {
            var iframe = document.createElement('iframe');
            iframe.src = mapUrl;
            iframe.style.border = '0';
            iframe.allowFullscreen = '';
            iframe.loading = 'lazy';
            mapContainer.appendChild(iframe);
        } else {
            alert('Por favor, ingrese una URL válida.');
        }
    }
    </script>
    <!-- End Script -->
</body>

</html>
