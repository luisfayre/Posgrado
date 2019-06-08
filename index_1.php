<?php
require_once './includes/mensaje_dia.php';
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

        <link rel="stylesheet" href="css/v4/bootstrap.css">
        <link rel="stylesheet" href="css/v4/prueba.css">



        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>


        <meta name="description" content="División de estudios de posgrado e investigación">
        <meta name="keywords" content="ITCHI II,DEPI,Posgrato tec 2, Posgrado ITCHI II">

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

        <title>División de estudios de posgrado e investigación</title>
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

        <!-- Hearder -->
        <header>
            <div class="container-fluid">
                <div class="">
                    <a href="https://www.gob.mx/" id="" target="_self" class="widget_sp_image-image-link" title="">
                        <img width="100" height="31" alt="" class="attachment-100x31 alignleft" style="max-width: 100%;"
                             src="img/logos/gob.png">
                    </a>
                </div>

                <div>
                    <img title="División de estudios de posgrado e investigación del Instituto tecnologico de chihuhua II" src="img/banner_principal2-mod.png" width="100%"
                         alt="DEPI ITCH II">
                </div>
            </div>
        </header>
        <!--Final Header-->

        <!--Menus-->
        <header>
            <nav  id="navbar" class="navbar navbar-expand-lg navbar-light" style="background:  linear-gradient(to right, #fafafa 0%, #e8e8e8 7%, #e8e8e8 93%, #fafafa 100%);">
                <div class="container"> 
                    <a class="navbar-brand" href="index.php">
                        DEPI
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Inicio 
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class=" nav-item dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown">
                                    Información
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"href="historia.php">Historia</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"href="mision_vision.php">Misión y Visión</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"href="documentos/calendarios/calendario-ene-jun-2019.pdf" target='_blank'>Calendario</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="http://www.sistemasycomputacion.mx/medios/">Medios de Verificación</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown">
                                    Posgrados
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="m_sistemas.php"">Maestría en Sistemas Computacionales</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="m_industrial.php"">Maestría en Ingeniería Industrial</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown data-toggle="dropdown">
                                   Servicios
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="http://moodle.itchihuahuaii.edu.mx/">Moodle para posgrados</a>
                                <a class="dropdown-item" href="documentos.php">Documentos</a>
                                <a class="dropdown-item" href="http://sii.itchihuahuaii.edu.mx/">Sistema Integral De Información(SII)</a>
                                <a class="dropdown-item" href="http://www.itchihuahuaii.edu.mx">Tecnológico de Chihuahua II</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="encuesta.php">Encuesta 

                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" data-toggle="dropdown">Administrativo</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="convocatoria_base.php">Requisitos de ingreso</a>
                                <a class="dropdown-item" href="proceso_titulacion.php">Proceso de Titulación</a>
                                <a class="dropdown-item" href="normatividad.php">Normatividad</a>
                            </div>
                        </li>


                        <li class="nav-item dropdown" style="   .dropdown-menu a:hover,
                            .dropdown-menu a:focus {
                                background: none !important;
                            }
                            .dropdown-menu a {
                                background: fdfdf !important;
                            }">
                            <a class="nav-link dropdown" data-toggle="dropdown">Eventos pasados</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="convocatoria2017.php">Convocatoria 2018-1</a>
                                <a class="dropdown-item" href="coloquio_Ene-Jun-2017.php">Coloquio Enero-Junio 2017</a>
                                <a class="dropdown-item" href="coloquio_Dic-2017.php">Coloquio Diciembre 2017</a>
                                <a class="dropdown-item" href="coloquio_Ago-Dic-2016.php">Coloquio Ago-Dic 2016</a>
                                <a class="dropdown-item" href="m_coloqui_Ene-Jun_2016.php">Coloquio Ene-Jun 2016</a>
                                <a class="dropdown-item" href="tercerjornadaacad.php">Tercer Jornada Academica</a>
                                <a class="dropdown-item" href="inducainv.php">Inducción a Investigación</a>
                                <a class="dropdown-item" href="graduacion2g.php">Graduación 2<sup>a</sup> Gen.</a>
                                <a class="dropdown-item" href="m_convocatoria16_En-Jun.php">Convocatoria Ene-Jun 2016</a>
                                <a class="dropdown-item" href="m_coloquio201.php">Coloquio Ago-Dic 2015</a>
                                <a class="dropdown-item" href="convocatoria-2015.php">Convocatoria Ago-Dic 2015</a>
                                <a class="dropdown-item" href="toastmasters.php">ToastMasters 2015</a>
                            </div>
                        </li> 
                    </ul>
                    </ul>

                </div> 
            </div>

        </nav>
    </header>
    <!--Final Navbar-->




    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <footer>
        <div class="container"> 
            <div class="row">
                <div class="col-6 col-md">
                    <h5>Reciente</h5>
                    <ul class="lista">
                        <li>
                            <a class="lista-item" href="convocatoria_base.php">Maestría en Sistemas Computacionales</a>
                        </li>

                        <li class="listado">
                            <a class="lista-item" href="jornadaAcad4ta.php">Cuarta Jornada Académica
                            </a>
                        </li>

                        <li class="listado">
                            <a class="lista-item" href="tercerjornadaacad.php">Tercer Jornada Académica
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-6 col-md">
                    <h5>Coloquios</h5>
                    <ul class="lista">
                        <li class="listado">
                            <a class="lista-item" href="coloquio_Dic-2017.php">Diciembre 2017</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item" href="coloquio_Ene-Jun-2017.php">Enero 2017</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item" href="coloquio_Ago-Dic-2016.php">Agosto 2016</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item" href="m_coloqui_Ene-Jun_2016.php">Enero 2016</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item" href="m_coloquio201.php">Dieciembre 2015</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Temas de interés</h5>
                    <ul class="lista">
                        <li class="listado">
                            <a class="lista-item" href="http://www.itchihuahuaii.edu.mx/">Movilidad</a></li>
                        <li class="listado">
                            <a class="lista-item" href="https://drive.google.com/file/d/12NPXsVBKm3Ewoi6RoikTR2cBJyQtRYjr/view?usp=sharing">Conclusión Administración 2012-2018</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item" href="https://drive.google.com/file/d/1AWzBBwT-5ppauxqdlhwfTF0-y5SWuhpi/view?usp=sharing">Rendición de Cuentas 2018</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>
                        Directorio
                    </h5>
                    <ul class="lista">
                        <li class="listado">
                            <a class="lista-item" href="http://moodle.itchihuahuaii.edu.mx/">Moodle</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item"  href="https://www.tecnm.mx/convocatorias">Convocatorias</a>
                        </li>
                        <li class="listado">
                            <a class="lista-item" href="http://www.itchihuahuaii.edu.mx/">TEC II</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <div class="container">
        <div class="col-12 col-md">
            <div class="textwidget">
                <a href="https://www.facebook.com/itchii.posgrados/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage( & #39; Imagen1 & #39; , & #39; & #39; , & #39; http://www.itchihuahuaii.edu.mx/img/facebook_color.png&#39;,1)" target="_blank">
                    <img src="img/logos/redes_sociales/facebook_btn.png" name="Imagen1" width="40" height="37" border="0" id="Imagen1" title="Facebook itchii posgrados">
                </a>
                <a href="https://twitter.com/posgradositch2" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage( & #39; Imagen2 & #39; , & #39; & #39; , & #39; http://www.itchihuahuaii.edu.mx/img/tweet_color.png&#39;,1)" target="_blank">
                    <img src="img/logos/redes_sociales/twitter_btn.png" name="Imagen2" width="40" height="37" border="0" id="Imagen2" title="Twitter itchii posgrados">
                </a>
                <br>
            </div>
        </div>
        <div class="col-12 col-md">
            <div class="text-center">
                <a href="https://www.facebook.com/itchii.posgrados/">
                    <img src="img/logos/pielogoo.jpg" name="Imagen1" width=".25rem">
                </a>
            </div>
        </div>
    </div>
    <div class="footer-socket-wrapper clearfix">
        <div class="inner-wrap">
            <div class="footer-socket-area">
                <div class="center-copy-footer">
                    <div class="textwidget">ITCHII-Algunos derechos reservados © 2019
                        <br>
                        Ave. de las Industrias #11101, Complejo Industrial Chihuahua, Chih. México, CP 31130
                        <br>
                    </div>
                </div>	
            </div>
        </div>
    </div>


    <div class = "links_footer">
        © 2019 |
        <a href = "http://www.tecnm.mx/informacion/ayuda-del-portal-web">Ayuda</a>
        &nbsp;
        &nbsp;
        <a href = "http://www.tecnm.mx/informacion/accesibilidad">Accesibilidad</a>
        &nbsp;
        &nbsp;
        <a href = "http://www.itchihuahuaii.edu.mx/?page_id=685">Mapa del sitio</a>
        &nbsp;
        &nbsp;
        <a href = "http://www.tecnm.mx/informacion/contacto-del-portal-web">Contacto de portal</a>
        &nbsp;
        &nbsp;
        <a href = "http://www.tecnm.mx/informacion/contacto-del-portal-web">Políticas de privacidad</a>
    </div>	


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141677500-1"></script>
    <script>
                                        window.dataLayer = window.dataLayer || [];
                                        function gtag() {
                                        dataLayer.push(arguments);
                                        }
                                gtag('js', new Date());
                                        gtag('config', 'UA-141677500-1');</script>



    <script>
                                window.onscroll = function () {
                                myFunction()
                                };
                                var navbar = document.getElementById("navbar");
                                var sticky = navbar.offsetTop;
                                function myFunction() {
                                if (window.pageYOffset >= sticky) {
                                navbar.classList.add("sticky")
                                } else {
                                navbar.classList.remove("sticky");
                                }
                                }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
