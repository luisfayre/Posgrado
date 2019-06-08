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


        <title>Colavoracion</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink2" href="barraMSist.html"></a>
        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>
                        MAESTRIA EN SISTEMAS COMPUTACIONALES
                    </h1>
                    <h2>COLABORACION CON OTROS SECTORES DE LA SOCIEDAD</h2>
                </div>
            </div>
            <div class="row bloque">
                <div class="col-md-12 col-sm-12">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/logos/cimav-logo.png" alt="...">
                            <div class="caption text-center ">
                                <h4>Centro de Investigación en Materiales Avanzados (CIMAV)</h4>
                                <p>http://www.cimav.edu.mx/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/logos/ceiac-logo.png" alt="...">
                            <div class="caption text-center ">
                                <h4>El Centro de Estudios para Invidentes, A.C.</h4>
                                <p>http://www.ceiac.org/</p>
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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141677500-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-141677500-1');
        </script>
    </body>

</html>
