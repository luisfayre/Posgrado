<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Estilos CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style_tec.css">
        <link rel="stylesheet" href="css/index.css">

        <link rel="stylesheet" href="css/font-awesome.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascript.js"></script>
        <script type="text/javascript" src="js/jquery.slidepanel.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.slidepanel.css">
        <title>Misión y Visión</title>

        <meta name="description" content="🎓 Contribuir a la formación del capital humano analítico, creativo, ético y competitivo, con una óptica
              global, responsabilidad social y congruencia con las necesidades del entorno.">
        <meta name="keywords" content="Misión, Visión,ITCHI II,DEPI,Posgrato tec 2, Posgrado ITCHI II,Posgrado, tec 2">
        <meta name="author" content="Instituto Tecnologico de Chihuahua II">
    </head>

    <body class="bodyIndex">
        <!--Header-->
        <?php
        require_once 'includes/header_depi.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_depi.php';
            ?>
        </div>

        <div class="container">
            <div class="col-md-12">

                <!-- Contenido -->

                <div class="col-md-8">
                    <div class="row ">
                        <div class="col-md-12 bloque col-sm-12">

                            <h1 class="titulo"  style="color:rgb(27, 57, 105);">
                                Misión y Visión
                            </h1>

                        </div>

                        <div class="col-md-12 col-sm-12 " style="text-align: justify">
                            <h2 class="titulo"  style="color:rgb(27, 57, 105);">
                                Misión
                            </h2>

                            <p>Contribuir a la formación del capital humano analítico, creativo, ético y competitivo, con una óptica
                                global, responsabilidad social y congruencia con las necesidades del entorno; que apliquen la
                                ciencia y la tecnología en el desarrollo y transformación de los factores económicos y productivos
                                del país para la formación de una sociedad justa y humana. </p>
                            <br>

                            <h2 class="titulo"  style="color:rgb(27, 57, 105);">
                                Visión
                            </h2>

                            <p>Ser un posgrado con reconocimiento global gracias a su excelencia académica y la calidad en la
                                formación profesional, ética y humanística de egresados con un espíritu emprendedor e investigador.
                                Ser punto de partida de un desarrollo sostenido, sustentable y equitativo del País a través de las
                                aportaciones que los egresados realicen a la ciencia y la tecnología. </p>

                            <br>
                            <br>
                            <div class="imgDEPI" style="text-align: center;">
                                <a href="img/organigrama/procesos_administrativos_organigrama.png">
                                    <img title="Organigrama depi" id="imgDEPI" src="img/organigrama/procesosOrganigramaUnoActualizado.jpg" alt="Organigrama depi ITCHI II" />
                                </a>
                            </div>


                            <?php
                            require_once 'includes/coordinadores.php';
                            ?>


                        </div>

                    </div>
                </div>

                <?php
                require_once 'includes/widgets.php';
                ?>

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