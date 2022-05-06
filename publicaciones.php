<?php include("db.php");?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Imaginacion inmobiliaria -  Construction Company Website Template Free</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Nuestra oficina</h6>
                        <span>Calle 28, Bogotá, COLOMBIA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Correo electronico</h6>
                        <span>imaginacioninmobiliaria@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Llámanos</h6>
                        <span>+57 3189998763</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>COL-INMUEBLES</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Acerca de</a>
                    <a href="service.html" class="nav-item nav-link">Servicios</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publicaciones</a>
                        <div class="dropdown-menu m-0">
                            <a href="project.html" class="dropdown-item">Casas</a>
                            <a href="team.html" class="dropdown-item">Apartamentos</a>
                            <a href="testimonial.html" class="dropdown-item">Fincas</a>
                            <a href="blog.html" class="dropdown-item">Lotes</a>
                            <a href="detail.html" class="dropdown-item">TODOS</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contacto</a>
                    <a href="formulario.html" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">PUBLICA YA<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

<?php
    $sql= "SELECT * FROM publicar ";
    $result=  mysqli_query($conn, $sql);


    while($mostrar = mysqli_fetch_array($result)){
?>

<div class="row g-5 portfolio-container">
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="img/apt1.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="h5 text-uppercase"><?php echo $mostrar['tituloP']; ?></p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $mostrar['direP']; ?></span>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $mostrar['ciudadP']; ?></span>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $mostrar['deparP']; ?></span>
                        <span class="text-body"><i class="fa fa-chevron-right text-primary me-2"></i><?php echo $mostrar['precioP']; ?></span>
                    </a>
                    <a class="portfolio-btn" href="img/apt1.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
        <?php
    }       

    ?>
<?php 