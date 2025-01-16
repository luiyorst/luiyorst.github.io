
<?php
include("conexion.php");
$con=conectar();


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Muni Anta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                            <img src="img/logoreal.png" width="325" height="110">
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">muniantabamba2023.2026@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">986695487</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                               
                            <a href="index.html" class="nav-item nav-link active">Inicio </a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">La Municipalidad</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <!--<a href="Antabamba.html" class="dropdown-item">Mi provincia</a>-->
                                        <a href="Alcalde.html" class="dropdown-item">Alcalde </a>
                                        <a href="Regidores.html" class="dropdown-item">Regidores</a>
                                        <a href="Organigrama.html" class="dropdown-item">Organigrama</a>
                                        <a href="Misionyvision.html" class="dropdown-item">Misión y Visión</a>
                                    </div>
                                </div>
                                
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Documentacion Virtual</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="Ordenazasmunicipales.html" class="dropdown-item">Ordenazas  Municipales</a>
                                        <a href="" class="dropdown-item">Decretos de Alcaldia</a>
                                        <a href="" class="dropdown-item">Acuerdos de Consejo</a>
                                        <a href="" class="dropdown-item">Instrumentos de Gestion</a>
                                        
                                        
                                    </div>
                                </div>


                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Resguardo al Ciudadno</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="DefensaCivil.html" class="dropdown-item">Defensa Civil</a>
                                        <a href="" class="dropdown-item">COPROSEC</a>   
                                    </div>
                                </div>

                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mi provincia</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="Antabamba.html" class="dropdown-item">Antabamba</a>
                                        <a href="Totora.html" class="dropdown-item">Totora Oropesa</a>
                                        <a href="Huaquirca.html" class="dropdown-item">Huaquirca</a>
                                        <a href="sabayno.html" class="dropdown-item">Sabayno</a>
                                        <a href="pachaconas.html" class="dropdown-item">Pachaconas</a>
                                        <a href="ayahuay.html" class="dropdown-item">Ayahuay "El oro" </a>
                                        <a href="molle.html" class="dropdown-item">Juan Espinoza Medrano</a>
                                        
                                    </div>
                                </div>
                                <a href="contact.php" class="nav-item nav-link">Contactos</a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Mesa de Partes Virtual</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Solicitudes</a></li>
                            <li class="breadcrumb-item"><a href="#">Permisos</a></li>
                            <li class="breadcrumb-item"><a href="#">y mas ...</a></li>
                            <!--<li class="breadcrumb-item text-white active" aria-current="page"></li>-->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
           <form action="mostrar.php" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <!--<div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>-->
                                <div class="col-md-12">
                                
                                <div class="form-floating">
                                             
                                            <!--<input type="text" class="form-control" name="codigo" id="codigo" placeholder="tu apellido">-->
                                           <!-- <label for="email">Digite su Dni</label>-->
                                        </div>
                                         <!--    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <!--<button class="btn btn-primary w-100" name="consulta" type="submit" >ir</button>-->
                        </div>
                    </div>
                </div>
            </div>
      <!-- pruena inicio -->
            
      





            </form>
        </div>
        <!-- Booking End -->

       




        

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <!--<h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>-->
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Contactenos</span>.</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Numero</h6>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i>986695487</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Correo</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>muniantabamba2023.2026@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">Facebook</h6>
                                <p><i class="fab fa-facebook-f text-primary me-2"></i>muniantabamba2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13000.598670121637!2d-72.88753865734552!3d-14.363560268696721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916c82b7eac726c9%3A0xa445ad6e8f967692!2sAntabamba%2003465!5e0!3m2!1ses-419!2spe!4v1689117707890!5m2!1ses-419!2spe"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                                   
                   
                        <div class="wow fadeInUp" data-wow-delay="0.2s">

                         
                            <form action="subir.php" method="POST" enctype="multipart/form-data">
                             

                                   <div class="col-12">
                                   <h6 class="  text-primary text-uppercase">1. Documento</h6>
                                   <a class="btn btn-link" href="sistema_de_tramite/registrar.php">Enviar Documento</a>
                                    </div>
                               
                               

                                    
                                    
                                        <br><br>

                                      <!--  Remitente -->
                                      

                                   <div class="col-12">
                                   <h6 class="  text-primary text-uppercase">2. Seguimiento de Tramite</h6>
                                   <a class="btn btn-link" href="sistema_de_tramite/seguimiento.php ">Consulta de mi Tramite</a>


                                    </div>




                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
               <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                             <!--<h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <!--<div class="bg-primary rounded p-4">

                        </div>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13000.598670121637!2d-72.88753865734552!3d-14.363560268696721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916c82b7eac726c9%3A0xa445ad6e8f967692!2sAntabamba%2003465!5e0!3m2!1ses-419!2spe!4v1689117707890!5m2!1ses-419!2spe" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contactos</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Plaza de Armas S/N</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>986695487</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>muni2023.2026@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Inicio</h6>
                                <a class="btn btn-link" href="Alcalde.html">Municipalidad</a>
                                <a class="btn btn-link" href="Ordenazasmunicipales.html">Documentacion Virtual</a>
                                <a class="btn btn-link" href="DefensaCivil.html">Resguardo Al ciudadano</a>
                                <a class="btn btn-link" href="Antabamba.html">Mi provincia</a>
                                <a class="btn btn-link" href="">Contactos</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Servicios</h6>
                                <a class="btn btn-link" href="">Mesa de Partes Virtual</a>
                                <a class="btn btn-link" href="">seguimiento de documentacion</a>
                                <a class="btn btn-link" href="">Resoluciones</a>
                                <a class="btn btn-link" href="">Memorandums</a>
                                <a class="btn btn-link" href="">Empastados</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">

                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            
                        </div>
                        <!--<div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>