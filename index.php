<?php
require_once './includes/mensaje_dia.php';
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_tec.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.css">


        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <meta name="description" content="🎓 El Tecnológico de Chihuahua II a través de la División de Estudios de Posgrado (DEPI), hace una atenta invitación a que cursen nuestros programas de maestría.">
        <meta name="keywords" content="Chihuhua,ITCHI II,DEPI,Posgrato tec 2, Posgrado ITCHI II,Posgrado, tec 2">
        <meta name="author" content="Instituto Tecnologico de Chihuahua II">


        <link href="icon.png" rel="icon"/>

        <style>
            /* Note: Try to remove the following lines to see the effect of CSS positioning */
            .affix {
                top: 0;
                width: 100%;
                z-index: 9999 !important;
            }

            .affix + .container-fluid {
                padding-top: 70px;
            }
        </style>

        <title>ITCH II: DEPI División de estudios de posgrado e investigación</title>
    </head>

    <body class="bodyIndex">

        <!--Mensaje del dia-->
        <?php
        if (verifica_rango($date_inicio, $date_fin, $date_nueva)) {
            echo "<a href=\"http://moodle.itchihuahuaii.edu.mx/mod/quiz/view.php?id=10677\" style=\"    display: block;
            padding: 15px 20px;
            color: #a94442;
            text-align: center;
            background-color: #f2dede;
            \" class=\"alert-danger\">$mensaje1</a>";
        } else if (verifica_rango($date_inicio2, $date_fin2, $date_nueva)) {
            echo "<a href=\"http://moodle.itchihuahuaii.edu.mx/mod/quiz/view.php?id=10677\" style=\"    display: block;
            padding: 15px 20px;
            color: #a94442;
            text-align: center;
            background-color: #f2dede;
            \" class=\"alert-danger\">$mensaje2</a>";
        }
        ?>

        <?php
        require_once 'includes/header_depi.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_depi.php';
            ?>
        </div>

        <!-- SLIDERS -->
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide col-md-offset-1 col-md-10 " data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a href="convocatoria.php">
                                        <img title="Convocatoria Maestria sistemas computacionales itchii" class="slider" src="img/Convocatoria-maestrias.jpg" 
                                             alt="Convocatoria Maestria sistemas computacionales itchii" style="width: 100%;">
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="convocatoria.php">
                                        <img title="Convocatoria Maestria sistemas computacionales itchii" class="slider" src="img/Convocatoria-maestrias.jpg" 
                                             alt="Convocatoria Maestria sistemas computacionales itchii" style="width: 100%;">
                                    </a>
                                </div>

                                <!-- <div class="item">
                                    <a href="m_sistemas_plan.html">
                                        <img class="slider" src="img\plan_sistemas.jpg" alt="..." style="width: 100%;">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="m_industrial_plan.html">
                                        <img class="slider" src="img\plan_industrial.jpg" alt="..." style="width: 100%;">
                                    </a>
                                </div> -->
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Leyenda -->
                <!-- <p style="text-align:center; margin:auto; color:gray">Presionar la imagen actual llevará a la página correspondiente</p> -->




                <div id="noticias" class="col-md-12 bloque">

                    <!-- Seccion de noticias-->

                    <div class="col-md-8">
                        <!-- <div class="media">
                            <div class="media-left">
                                <div class="img2">
                                    <img src="img\Coloquio_Ago-Dic-2016\Sistemas\4.jpg" alt="coloquio_ago_dic_16" class="media-object imgNews img-responsive imgNewsZoom">
                                </div>
                            </div>
                            <div class="media-body text-left">
                                <h2 class="media-heading">Coloquio Ago-Dic 2016</h2>
                                <p align="left">Aqui encontraras toda la información relacionada con el coloquio pasado.</p>
                                <p align="left"><a href="coloquio_Ago-Dic-2016.html" class="rm">LEER NOTA</a></p>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="media-left">
                                <div class="img2">
                                    <img src="img/coloquio2016_e-j.jpg" alt="coloquio_ene-jun-16" class="media-object imgNews img-responsive">
                                </div>
                            </div>
                            <div class="media-body text-left">
                                <h2>Coloquio Enero-Junio 2016</h2>
                                <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con el coloquio. </p>
                                <p class="Estilo34" align="left"><a href="m_coloqui_Ene-Jun_2016.html" class="rm">LEER NOTA</a></p>
                            </div>
                        </div>
                        <hr> -->
                        <div class="col-md-12">
                            <div class="thumbnail text-left imagen-noticia">
                                <a href="documentos/Información_Maestría-2019a.pdf">
                                    <img src="img\pic08.jpg" alt="Maestria Sistemas Computacionales depi itchi ii" class="media-object img-responsive imgNewsZoom">
                                </a>
                                <div class="caption">
                                    <p class="titulo_noticia">Convocatoria Maestrías 2019-1</p>
                                    <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con la Convocatoria de Maestrías</p>
                                    <p class="Estilo34" align="left"><a href="documentos/Información_Maestría-2019a.pdf" class="rm">LEER NOTA</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="thumbnail text-left imagen-noticia ">
                                <img src="img\Coloqui_Dic-2017\Sistemas\4.jpg" alt="Coloquio Diciembre 2017 depi itchi ii" class="media-object img-responsive imgNewsZoom">
                                <div class="caption">
                                    <h2>Coloquio Diciembre 2017</h2>
                                    <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con el coloquio.</p>
                                    <p class="Estilo34" align="left"><a href="coloquio_Dic-2017.php" class="rm">LEER NOTA</a></p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <div class="thumbnail text-left img2">
                                <img src="img/Coloquio_Ene-Jun_2017/1.jpg" alt="coloquio_ene-jun-17" class="media-object img-responsive imgNewsZoom">
                                <div class="caption">
                                    <h2>Coloquio Enero-Junio 2017</h2>
                                    <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con el coloquio.</p>
                                    <p class="Estilo34" align="left"><a href="coloquio_Ene-Jun-2017.html" class="rm">LEER NOTA</a></p>
                                </div>
                            </div>
                        </div>--> 
                        <div class="col-md-6">
                            <div class="thumbnail text-left imagen-noticia">
                                <img src="img\Jornada-4\jornada4 (4).jpg" alt="Cuarta Jornada Academica" class="media-object img-responsive imgNewsZoom">
                                <div class="caption">
                                    <h2>Cuarta Jornada Académica</h2>
                                    <p class="Estilo34" align="left">Aqui encontraras toda la información relacionada con la cuarta jornada académica.</p>
                                    <p class="Estilo34" align="left"><a href="jornadaAcad4ta.php" class="rm">LEER NOTA</a></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <!-- Seccion de widgets-->


                    <div class="col-md-4">
                        <div class="text-center">

                            <!--Examen-->
                            <?php
                            if (verifica_rango($date_inicio, $date_fin2, $date_nueva)) {
                                echo "<p>
                                <a href=\"http://moodle.itchihuahuaii.edu.mx/mod/quiz/view.php?id=10677\"target=\"_blank\">
                                <img src = \"img/logos/examen.png\" alt=\"examen depi\"height=\"100 \" width=\"195\" style=\"max-width: 100%;\">
                                </a>
                            </p>";
                            }
                            ?>
                            <p>
                                <a href="" target="">
                                    <img title="DEPI ITCH II" src="img/logos/depi.png" alt="depi "height="100 " width="195" style="max-width: 100%;">
                                </a>
                            </p>

                            <p>
                                <a href="http://sii.itchihuahuaii.edu.mx/ " target="_blank ">
                                    <img title="sii itchihuahuaii"src="img/logos/SII.jpg " height="100 " width="195" style="max-width: 100%;" alt="sii itchi ii">
                                </a>
                            </p>

                            <!-- Calendario -->
                            <p>
                                <iframe id="minical" scrolling="no" frameborder="0" src='calendar.html' width="258px" height='275px'></iframe>
                            </p>
                            <!-- Fin calendario -->
                            <p>
                                <a href="http://www.conricyt.mx" target="_blank">
                                    <img src="img/logos/conricyt.jpg" border="0" height="105" width="232">
                                </a>
                            </p>
                            <p>
                                <a href="http://capacitacion.conricyt.mx/ " target="_blank ">
                                    <img src="img/logos/conricytcap.jpg " border="0 " height="105 " width="232 ">
                                </a>
                            </p>
                            <p>
                                <a href="http://www.cnbes.sep.gob.mx/">
                                    <img src="img/logos/cnbes.png" border="0" height="105" width="232">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pie de pagina-->
        <!--a id="ddmenuLink2" href="footerDEPI.html"></a-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascript.js"></script>
        <script type="text/javascript" src="js/jquery.slidepanel.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.slidepanel.css">
        <script src="js/ddmenu.js" type="text/javascript"></script>
        <!-- iframe minicalendario -->
        <script src="js/minical.js"></script>

        <div class="container">

            <?php
            require_once 'includes/reciente.php';
            ?>

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
