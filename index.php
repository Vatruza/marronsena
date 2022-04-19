<?php
    include "php/con_db.php"
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marrón Sena | CDMC</title>
    <meta name="descripcion" content="Sena Cento de diseño y manofactura del cuero">
    <meta name="autor" content="Juan Mejia">
    <link rel="shortcut icon" href="img/sombrero.png" type="image/x-icon">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand page-scroll" href="#page-top">Marrón Sena</a> </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="page-scroll">Sobre nosotros</a></li>
                    <li><a href="#restaurant-menu" class="page-scroll">Productos</a></li>
                    <li><a href="#portfolio" class="page-scroll">Fotos</a></li>
                    <li><a href="registrarvista.php" class="page-scroll">regístrarme</a></li>
                    <li><a href="loginvista.php" class="page-scroll">Iniciar sesión</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>Marrón Sena</h1>
                            <p>Zapatos / Zapatillas / Botas / Bolsos</p>
                            <a href="#about" class="btn btn-custom btn-lg page-scroll">Quiénes somos</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 ">
                    <div class="about-img"><img src="img/about.jpg" class="img-responsive" alt=""></div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>MARRÓN SENA</h2>
                        <hr>
                        <p>Marrón SENA es una tienda virtual que tiene el objetivo de mostrar el arte de la marroquinería de los aprendices del SENA.</p>
                        <!-- <h3>Trabajadores</h3>
                        <p>Sofia Medina</p>
                        <p>Cristina Zapata</p>
                        <p>Eythan Cossio</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Menu Section -->
    <div id="restaurant-menu">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>CONFECCIONES</h2>
                <hr>
                <!-- <p>confecciones</p> -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="menu-section">
                        <h2 class="menu-section-title"> Productos y sus precios </h2>
                        <hr>
                        <?php
                                $consulta = "SELECT * FROM productos";
                                $query = mysqli_query($conex,$consulta);
                                $productos = mysqli_num_rows($query);

                                if ($productos > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="menu-item">
                                                <div class="menu-item-name"> <?php echo $data['nombre'] ?> </div>
                                                <div class="menu-item-price"> $<?php echo $data['precio'] ?> </div>
                                                <div class="menu-item-description"> <?php echo $data['descripcion'] ?>. </div>
                                            </div>

                                        <?php
                                    }
                                }
                            ?>
                    </div>
                </div>
            </div>
            <br>


            <!-- Portfolio Section -->
            <div id="portfolio">
                <div class="section-title text-center center">
                    <div class="overlay">
                        <h2>Fotos</h2>
                        <hr>
                        <p>A continuacion los tipos de zapatillas y bolsos disponibles en nuestro centro</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="categories">
                            <ul class="cat">
                                <li>
                                    <ol class="type">
                                        <li><a href="#" data-filter="*" class="active">Todos</a></li>
                                        <li><a href="#" data-filter=".Cuero">Cuero</a></li>
                                        <li><a href="#" data-filter=".Cuerina">Cuerina</a></li>
                                        <li><a href="#" data-filter=".Tela">Tela</a></li>
                                    </ol>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-items">
                        <?php
                                $consulta = "SELECT * FROM productos";
                                $query = mysqli_query($conex,$consulta);
                                $productos = mysqli_num_rows($query);

                                if ($productos > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="col-sm-6 col-md-4 col-lg-4 <?php echo $data['material'] ?>">
                                            <div class="portfolio-item">
                                                <div class="hover-bg">
                                                    <a href="#restaurant-menu" class="page-scroll" title="<?php echo $data['nombre'] ?>" data-lightbox-gallery="gallery1">
                                                        <div class="hover-text">
                                                            <h4> <?php echo $data['nombre'] ?></h4>
                                                        </div>
                                                        <img src="data:image/jpg;base64, <?php echo base64_encode($data['imagen']) ?>" class="img-responsive" alt="Imagen del producto"> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 section-title">
                <h1 class="publicidad-tittle">PUBLICIDAD</h1>       
            </div>
            <!-- Publicity Section -->
            <div id="team" class="text-center">
                <div class="overlay">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 section-title publicidad-wrapper">
                            <img src="https://www.cursosvirtualessena.com.co/wp-content/uploads/2020/06/cursos-de-marroquineria-sena.jpg" alt="publicidad" class="imagen-publicidad">
                        </div>
                    </div> 
                </div>  
            </div>
        </div>
        <!-- Call Reservation Section -->
        <div id="call-reservation" class="text-center">
            <div class="container">
                <h2>Numero de telefono <strong>(4) 514-9290</strong></h2>
            </div>
        </div>
        <!-- Contact Section -->
        <div id="contact" class="text-center">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Formas de Contacto</h2>
                    <hr>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p> -->
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="nombre" class="form-control" placeholder="Nombre" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="mensaje" id="mensaje" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-custom btn-lg">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container text-center">
                <div class="col-md-4">
                    <h3>Direccion</h3>
                    <div class="contact-item">
                        <p>Calle 63 # 58B - 03,</p>
                        <p>Itagui, complejo sur</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Hora de apertura</h3>
                    <div class="contact-item">
                        <p>Lunes-Viernes: 6:00 AM - 10:00 PM</p>
                        <p>Sabado-Domingo: 6:00 AM - 10:00 PM</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contacto</h3>
                    <div class="contact-item">
                        <p>Telefono: (4) 514-9290</p>
                        <p>Email: info@company.com</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center copyrights">
                <div class="col-md-8 col-md-offset-2">
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/disenoconfeccionymoda/"><i class="fa fa-facebook"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                        </ul>
                    </div>
                    <p>&copy; 2020 Centro del diseño y manufactura del cuero <a href="http://www.templatewire.com" rel="nofollow">Sena</a></p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/nivo-lightbox.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="js/contact_me.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
</body>

</html>