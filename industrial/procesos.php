<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Estilos-->
        <link rel="stylesheet" href="../css/style_tec.css">
        <link rel="stylesheet" href="../css/index.css">
        <!-- Scripts-->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <title>Procesos Administrativos</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <!--Header-->
        <?php
        require_once 'includes/header.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_industrial.php';
            ?>
        </div>

        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="principal" style="color:rgb(27, 57, 106)">MAESTRÍA EN INGENIERÍA INDUSTRIAL</h1>
                    <h2>Procesos Administrativos</h2>
                    <h2>Organigrama</h2>
                    <h3>División de Estudios de Posgrado e Investigación</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <img class="img-responsive" src="../img/organigrama/procesosOrganigramaUnoActualizado.jpg" alt="Organigrama de División de Estudios de Posgrado e Investigación">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Organigrama</h2>
                    <h3>Comité Institucional de Posgrado e Investigación</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <img class="img-responsive" src="../img/organigrama/comite_procesos_administrativos.png" alt="Organigrama del Comité Institucional de Posgrado e Investigación">
                </div>
            </div>
            <!--div class="row bloque">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Jefa de depto. de posgrado e investigación</h2>
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="thumbnail">
                            <img src="" alt="...">
                            <div class="caption ">
                                <h4></h4>
                            </div>
                            <div class="caption">
                                <p>Correo: posgrado@itchihuahuaii.edu.mx</p>
                                <p>Teléfono:52 (614) 442-5032</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div-->

            <?php
            require_once 'includes/coordinadores.php';
            ?>

        </div>
        <div class="container">
            <!-- Noticas-->

            <?php
            require_once 'includes/reciente.php';
            ?>
            <!--Pie de pagina-->
            <?php
            require_once 'includes/footer.php';
            ?>
        </div> 

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141677500-1"></script>
    </body>

</html>
