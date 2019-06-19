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

        <title>Colavoracion</title>
    </head>

    <body class="bodyIndex">
        <!--Header-->
        <?php
        require_once 'includes/header.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_sistemas.php';
            ?>
        </div>

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
                            <div class="text-center" style="height:230px;">
                                <img src="../img/logos/cimav-logo.png" alt="Cimav logo" width="200" style="padding-top: 73px; padding-bottom: 73px;">
                            </div>
                            <div class="caption text-center ">
                                <h4>Centro de Investigación en Materiales Avanzados (CIMAV)</h4>
                                <p>http://www.cimav.edu.mx/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="text-center" style="height:230px;">
                                <img class=""src="../img/logos/ceiac-logo.png" alt="Ceiac logo" width="200" style="padding-top: 73px; padding-bottom: 73px;">
                            </div>
                            <div class="caption text-center ">
                                <h4>El Centro de Estudios para Invidentes, A.C.</h4>
                                <p>http://www.ceiac.org/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail text-center">
                            <img src="../img/logos/crit-teleton-chihuahua-logo.png" alt="Crit teleton logo" width="200" height="230">
                            <div class="caption text-center ">
                                <h4>Fundaciòn Teletón México.</h4>
                                <p>http://www.teleton.org/home/informacion-crit/CRIT-Chihuahua</p>
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
