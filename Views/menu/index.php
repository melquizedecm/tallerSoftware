<?php
require_once '../../lib/links.php';
libnivel3();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        getMeta("Menu");
        ?>

        <!-- Bootstrap core CSS -->
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../lib/css/round-about.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfiles</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--  para Data Tables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- no olviden que esta libreria va al final-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="head">
            <?php getHeader(); ?>
        </div>
        <!-- Page Content -->
        <div class="container bg-light">

            <!-- Introduction Row -->
            <h1 class="my-4">Nosotros:
                <small>Somos un proyecto del ITSVA</small>
            </h1>
            <p>SISTEMA DE PUNTO DE VENTA</p>

            <!-- Team Members Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="my-4">Our Team</h2>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="../comisiones/"><img class="rounded-circle img-fluid d-block mx-auto" src="https://www.cch.unam.mx/general/sites/www.cch.unam.mx.general/files/auxiliaresComision.jpg" width="300" alt=""></a>
                    <h3>Comisiones
                    </h3>
                    <p>Consulte nuestros costos de desarrollo y facilidades de pago.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="../empleados/"><img class="rounded-circle img-fluid d-block mx-auto" src="https://previews.123rf.com/images/yayasyaya/yayasyaya1604/yayasyaya160400006/56750263-equipo-de-negocios-de-los-empleados-y-de-la-ilustraci%C3%B3n-jefe.jpg" width="200" alt=""></a>
                    <h3>Empleados
                    </h3>
                    <p>Contamos con personal en constante capacitación.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="../facturas/"><img class="rounded-circle img-fluid d-block mx-auto" src="data:image/jpeg;base64,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" alt=""></a>
                    <h3>Facturas
                    </h3>
                    <p>Solicite gratuitamente con nosotros su factura de sus productos para cualquier aclaración.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="../perfiles/"><img class="rounded-circle img-fluid d-block mx-auto" src="https://images.vexels.com/media/users/3/147102/isolated/preview/082213cb0f9eabb7e6715f59ef7d322a-icono-de-perfil-de-instagram-by-vexels.png" width="200" alt=""></a>
                    <h3>Perfiles
                    </h3>
                    <p>Vericados y accesibles para brindar nuestros servicios las 24 horas y los 365 días del año.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="../productos/"><img class="rounded-circle img-fluid d-block mx-auto" src="https://img.interempresas.net/fotos/1453672.jpeg" alt=""></a>
                    <h3>Productos
                    </h3>
                    <p>Planeación, diseño y codificación eficiente 100% de calidad.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="../usuarios/"><img class="rounded-circle img-fluid d-block mx-auto" src="https://www.4webs.es/blog/wp-content/uploads/2016/10/usuarios-nuevos-vs-recurrentes.jpg" alt=""></a>
                    <h3>Usuarios
                    </h3>
                    <p>Conozca más acerca de lo que opinan nuestros usuarios que forman parte de nuestra organización.</p>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright © Your Website 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




