<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Estilos-->
        <link rel="stylesheet" href="css/style_tec.css">
        <link rel="stylesheet" href="css/index.css">
        <!-- Funete-->
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- Scripts-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascript.js"></script>
        <script type="text/javascript" src="js/jquery.slidepanel.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.slidepanel.css">

        <title>Procesos Administrativos</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink2" href="barraMSist.html"></a>
        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>MAESTRIA EN SISTEMAS COMPUTACIONALES</h1>
                    <h2>PROCESOS ADMINISTRATIVOS</h2>
                    <h3>DIVISIÓN DE ESTUDIOS DE POSGRADO E INVESTIGACIÓN <br>ORGANIGRAMA</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <img class="img-responsive" src="img/depi_organigrama_n.gif" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>COMITÉ INSTITUCIONAL DE POSGRADO E INVESTIGACIÓN <br>ORGANIGRAMA</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <img class="img-responsive" src="img/comite_organigrama_n.gif" alt="">
                </div>
            </div>
            <div class="row bloque">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Jefa de depto. de posgrado e investigación</h2>
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <div class="thumbnail">
                            <!--img src="img/cv/blanca.png" alt="..."-->
                            <div class="caption ">
                                <h4>Lic. Olga Rebeca Castillo Cruz</h4>
                            </div>
                            <div class="caption">
                                <p>Correo: posgrado@itchihuahuaii.edu.mx</p>
                                <p>Teléfono:52 (614) 442-5032</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2>Cordinadores</h2>
                    <div class="col-sm-6 col-md-5 col-md-offset-1">
                        <h4>Maestría en Ingeniería Industrial</h4>
                        <div class="thumbnail">
                            <img src="" alt="...">
                            <div class="caption ">
                                <h4>Dra. Luisa Yolanda Quiñones Montenegro</h4>
                            </div>
                            <div class="caption">
                                <p>posgradomii@hotmail.com</p>
                                <p>Teléfono:52 (614) 442-5032</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <h4>Maestría en Sistemas
                            Computacionales</h4>
                        <div class="thumbnail">
                            <img src="img/cv/Ilya.jpg" alt="...">
                            <div class="caption ">
                                <h4>M.S.I Ilya Sánchez</h4>
                            </div>
                            <div class="caption">
                                <p>ilyasanchez@hotmail.com
                                <p>Teléfono:52 (614) 442-5032</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!--Noticias Recientes-->
            <?php
            require_once 'includes/reciente.php';
            ?>
            <!--Pie de pagina-->
            <?php
            require_once 'includes/footer.php';
            ?>
        </div>

    </body>

</html>
