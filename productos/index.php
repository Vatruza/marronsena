<?php
    include "../php/con_db.php"
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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/productos.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand page-scroll" href="#page-top">Marrón Sena</a> 
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../home.php">Ir al home</a></li>
                    <li><a href="../agregar-producto">Agregar producto</a></li>
                    <li><a href="../index.php">cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="products-table">
        <div class="row">
            <h1>Productos</h1>
            <table class="table table-striped">
                <thead class="thead-dark"> 
                    <tr>
                        <th scope="col">Id del producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Material</th>
                        <th scope="col">Imagen</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $consulta = "SELECT * FROM productos";
                        $query = mysqli_query($conex,$consulta);
                        $productos = mysqli_num_rows($query);

                        if ($productos > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $data['id_producto'] ?></th>
                                    <td><?php echo $data['nombre'] ?></td>
                                    <td><?php echo $data['descripcion'] ?></td>
                                    <td><?php echo $data['precio'] ?></td>
                                    <td><?php echo $data['material'] ?></td>
                                    <td><img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($data['imagen']) ?>" alt=""></td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
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
    
        
        <script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/SmoothScroll.js"></script>
        <script type="text/javascript" src="../js/nivo-lightbox.js"></script>
        <script type="text/javascript" src="../js/jquery.isotope.js"></script>
        <script type="text/javascript" src="../js/jqBootstrapValidation.js"></script>
        <script type="text/javascript" src="../js/contact_me.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>




<!-- <?php
    include "../php/con_db.php"
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marrón Sena | Productos</title>
        <meta name="descripcion" content="Sena Cento de diseño y manofactura del cuero">
        <link rel="shortcut icon" href="../img/sombrero.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="../css/nivo-lightbox/default.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>
    <body>
        <nav id="menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Marrón Sena</a> </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="agregar-producto">Agregar producto</a></li>
                        <li><a href="index.php" class="page-scroll">cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <center>
            <div class="container">
                <div class="row">
                    <h1>Productos</h1>
                    <table class="table table-striped">
                        <thead class="thead-dark"> 
                            <tr>
                                <th scope="col">Id del producto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Material</th>
                                <th scope="col">Imagen</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $consulta = "SELECT * FROM productos";
                            $query = mysqli_query($conex,$consulta);
                            $productos = mysqli_num_rows($query);

                            if ($productos > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $data['id_producto'] ?></th>
                                        <td><?php echo $data['nombre'] ?></td>
                                        <td><?php echo $data['descripcion'] ?></td>
                                        <td><?php echo $data['precio'] ?></td>
                                        <td><?php echo $data['material'] ?></td>
                                        <td><img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($data['imagen']) ?>" alt=""></td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </body>
    </html> -->