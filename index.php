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

        <meta name="theme-color" content="#9c2642">
        <link rel="icon" type="image/png" href="img/icon.png" sizes="192x192">

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <meta name="description" content="🎓 El Tecnológico de Chihuahua II a través de la División de Estudios de Posgrado (DEPI), hace una atenta invitación a que cursen nuestros programas de maestría.">
        <meta name="keywords" content="Chihuhua,ITCHI II,DEPI,Posgrato tec 2, Posgrado ITCHI II,Posgrado, tec 2">
        <meta name="author" content="Instituto Tecnologico de Chihuahua II">


        <link href="img/icon.png" rel="icon"/>

        <style>
            /* Note: Try to remove the following lines to see the effect of CSS positioning */
            /*  .affix {
                  top: 0;
                  width: 100%;
                  z-index: 9999 !important;
              }
  
              .affix + .container-fluid {
                  padding-top: 70px;
              }*/

            /* Note: Try to remove the following lines to see the effect of CSS positioning */
            .affix {
                top: 0;
                width: 100%;
                z-index: 9999 !important;
            }

            .affix + .container-fluid {
                padding-top: 70px;
            }


            /*.carousel {
                position:absolute;  
            }*/

            .navbar {
                z-index: 9999 !important;
            }
        </style>

        <title>🎓 ITCH II: DEPI División de estudios de posgrado e investigación</title>
    </head>

    <body>

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
        <div class="container mod-container">
            <?php
            require_once 'includes/navbar_depi.php';
            ?>
        </div>

        <!-- Carrousel -->

        <div class="container mod-container text-center">
            <div class="text-center">
                <div id="myCarousel" class="carousel slide mod-carousel" data-ride="carousel" style="">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="convocatoria/Convocatoria del Doctorado en Ciencias de la Ingeniería  2020-2[140].pdf">
                                <img class="img-responsive" title="Convocatoria Docturado en Ciencias de la Ingeniería itchii
                                " class="slider" src="img/Convocatora-doctorado.png" 
                                     alt="Convocatoria Docturado en Ciencias de la Ingeniería itchii" style="width: 100%;">
                            </a>
                        </div>

                        <div class="item">
                            <a href="convocatoria.php">
                                <img class="img-responsive" title="Convocatoria Maestria Industrial itchii" class="slider" src="img/Convocatoria_ii.jpg" 
                                     alt="Convocatoria Maestria Industrial itchii" style="width: 100%;">
                            </a>
                        </div>

                        <div class="item">
                            <a href="convocatoriaISC.php">
                                <img class="img-responsive" title="Convocatoria Maestria sistemas computacionales itchii" class="slider" src="img/ConvocatoriaISC.jpg" 
                                     alt="Convocatoria Maestria sistemas computacionales itchii" style="width: 100%;">
                            </a>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Leyenda -->
        <!-- <p style="text-align:center; margin:auto; color:gray">Presionar la imagen actual llevará a la página correspondiente</p> -->

        <div class="container mod-container">
            <div class="row">
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
                        <div class="col-md-12 text-center" style="padding-bottom: 20px">
                            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fitchii.posgrados%2Fvideos%2F1236673706388311%2F&show_text=0&width=560" width="560" height="305" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

                            <!--div class="thumbnail text-left imagen-noticia">
                                <a href="documentos/Información_Maestría-2019a.pdf">
                                    <img src="img\pic08.jpg" alt="Maestria Sistemas Computacionales depi itchi ii" class="media-object img-responsive imgNewsZoom">
                                </a>
                                <div class="caption">
                                    <p class="titulo_noticia">Convocatoria Maestrías 2019-1</p>
                                    <p class="decripcion_noticia" align="left">Aqui encontraras toda la información relacionada con la Convocatoria de Maestrías</p>
                                    <p align="left">
                                        <a href="documentos/Información_Maestría-2019a.pdf" class="rm">LEER NOTA</a>
                                    </p>
                                </div>
                            </div-->
                        </div>

                        <div class="col-md-12 col-xs-6">
                            <div class="thumbnail thumbnail-secundaria text-left imagen-noticia row">
                                <div class=" col-md-4 alva">
                                    <a href="noticias/2017-coloquio-agosto-diciembre.php">
                                        <img src="img\Coloqui_Dic-2017\Sistemas\4.jpg" alt="Coloquio Diciembre 2017 depi itchi ii" class="imgNewsZoom">
                                    </a>
                                </div>
                                <div class="col-md-8 caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="titulo_noticia_secundaria">Coloquio Diciembre 2017</h4>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="decripcion_noticia">Aqui encontraras toda la información relacionada con la cuarta jornada académica.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="noticias/2017-coloquio-agosto-diciembre.php" class="rm">LEER NOTA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-6">
                            <div class="thumbnail thumbnail-secundaria text-left imagen-noticia row">
                                <div class=" col-md-4 alva">
                                    <a href="noticias/2017-coloquio-enero-junio.php" class="rm">
                                        <img class="imgNewsZoom" src="img/Coloquio_Ene-Jun_2017/1.jpg" alt="coloquio_ene-jun-17" alt="Cuarta Jornada Academica">
                                    </a>
                                </div>
                                <div class="col-md-8 caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="titulo_noticia_secundaria">Coloquio Enero-Junio 2017</h4>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="decripcion_noticia">Aqui encontraras toda la información relacionada con la cuarta jornada académica.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="coloquio_Ene-Jun-2017.html" class="rm">LEER NOTA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-6">
                            <div class="thumbnail thumbnail-secundaria text-left imagen-noticia row">
                                <div class=" col-md-4 alva">
                                    <a href="noticias/cuarta-jornada-academica.php" class="rm">
                                        <img class="imgNewsZoom" src="img\Jornada-4\jornada4 (4).jpg" alt="Cuarta Jornada Academica">
                                    </a>

                                </div>
                                <div class="col-md-8 caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="titulo_noticia_secundaria">Cuarta Jornada Académica</h4>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="decripcion_noticia">Aqui encontraras toda la información relacionada con la cuarta jornada académica.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="noticias/cuarta-jornada-academica.php" class="rm">LEER NOTA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <!-- Seccion de widgets-->


                    <div class="col-md-4">

                        <div class="row text-center">


                            <!--Examen-->
                            <?php
                            if (verifica_rango($date_inicio, $date_fin2, $date_nueva)) {
                                echo "<div class=\"col-xs-6\"><p>
                                <a href=\"http://moodle.itchihuahuaii.edu.mx/mod/quiz/view.php?id=10677\"target=\"_blank\">
                                <img src = \"img/logos/examen.png\" alt=\"examen depi\"height=\"100 \" width=\"195\" style=\"max-width: 100%;\">
                                </a>
                            </p></div>";
                            }
                            ?>

                            <div class="col-xs-6 col-md-12">
                                <p>
                                    <a href="" target="">
                                        <img title="DEPI ITCH II" src="img/logos/depi.png" alt="depi "height="100 " width="195" style="max-width: 100%;">
                                    </a>
                                </p>
                            </div>
                            <div class="col-xs-6 col-md-12">
                                <p>
                                    <a href="http://sii.itchihuahuaii.edu.mx/ " target="_blank ">
                                        <img title="sii itchihuahuaii"src="img/logos/SII.jpg " height="100 " width="195" style="max-width: 100%;" alt="sii itchi ii">
                                    </a>
                                </p>
                            </div>
                            <!-- Calendario -->
                            <div class="col-xs-12  col-md-12 hidden-xs">
                                <p>
                                    <iframe id="minical" scrolling="no" frameborder="0" src='calendar.html' width="258px" height='275px'></iframe>
                                </p>
                            </div><!-- Fin calendario -->
                            <div class="col-xs-12  col-md-12 hidden-xs">
                                <p>
                                    <a href="http://www.conricyt.mx" target="_blank">
                                        <img src="img/logos/conricyt.jpg" border="0" height="105" width="232">
                                    </a>
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-12 hidden-xs">
                                <p>
                                    <a href="http://capacitacion.conricyt.mx/ " target="_blank ">
                                        <img src="img/logos/conricytcap.jpg " border="0 " height="105 " width="232 ">
                                    </a>
                                </p>
                            </div>
                            <div class="col-xs-12  col-md-12 hidden-xs">
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


            <!--div class="row">
                <div class="col-xs-12 col-sm-3"> 
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Very long link 1</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 2</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 3</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3"> 
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Very long link 1</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 2</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 3</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3"> 
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Very long link 1</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 2</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 3</a>
                        </li>
                        <li>
                            <a href="#!">Very long link 4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3"> 
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">RELACIONADO</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="http://moodle.itchihuahuaii.edu.mx/">Moodle</a>
                        </li>
                        <li>
                            <a href="https://www.tecnm.mx/convocatorias">Convocatorias</a>
                        </li>
                        <li>
                            <a href="http://www.itchihuahuaii.edu.mx/?page_id=871">Multiverso TecNM</a>
                        </li>
                        <li>
                            <a href="http://www.itchihuahuaii.edu.mx/?page_id=1404">Transparencia</a>
                        </li>
                    </ul>
                </div>
            </div-->

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
