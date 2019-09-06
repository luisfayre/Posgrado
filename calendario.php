<!DOCTYPE html>
<html>
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

        <script src="js/ddmenu.js" type="text/javascript"></script>


        <link rel='stylesheet' href="fullcalendar/fullcalendar.css">
        <script src="js/jquery.js"></script>
        <script src="js/moment.js"></script>
        <script src="fullcalendar/fullcalendar.js"></script>
        <script src="fullcalendar/locale/es.js"></script>
        <script>
                    $(document).ready(function () {
            $('#calendar').fullCalendar({
            height: 640,
                    eventLimit: true,
                    eventSources: [{
                    events: [
                    {
                    title: "Recepción de Solicitudes de Ingreso a la Maestría ",
                            start: "2019-01-01",
                            end: "2019-11-29",
                    },
                    {
                    title: "Examen de ingreso",
                            start: "2019-06-6",
                            end: "2019-12-6",
                    },
                    {
                    title: "Examen de inglés",
                            start: "2019-12-7",
                            end: "2019-12-7",
                    },
                    {
                    title: "Registro examen Ceneval",
                            start: "2019-01-1",
                            end: "2019-10-1",
                    },
                    {
                    title: "Examen Ceneval",
                            start: "2019-01-1",
                            end: "2019-10-1",
                    },
                    {
                    title: "Entrevistas",
                            start: "2019-12-10",
                            end: "2019-12-12",
                    },
                    {
                    title: "Publicación de resultados",
                            start: "2019-12-18",
                            end: "2020-01-30",
                    },
                    ],
                            color: "#a5273f",
                    }]
            })
            });</script>
    </head>

    <body class="bodyIndex">
        <?php
        require_once 'includes/header_depi.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_depi.php';
            ?>
        </div>

        <div class="container"> <!-- Inicia container-->
            <div class="col-md-12">   

                <!-- Inicia contenido -->
                <div class="col-md-12">
                    <div id="calendar"></div>
                </div> 
                <!-- Termina contenido -->



            </div>
        </div> <!-- Termina container-->


        <div class="container">

            <!-- Inicia Reciente -->

            <div class="divisor_sombra">
            </div> 
            <div id="4directorios" class="four_directories">
                <div class="directorio-footer-column">
                    <div class="directorio-footer">
                        <div class="Directorio_title">SISTEMA DE GESTIÓN</div>
                        <br>
                        <br>			
                        <div class="textwidget">
                            <li class="listado">
                                <a href="http://www.itchihuahuaii.edu.mx/?page_id=885">Sistema de Igualdad de Genero</a>
                            </li>
                            <li class="listado">
                                <a href="http://www.itchihuahuaii.edu.mx/?page_id=1726">Ambiental</a>
                            </li>
                            <li class="listado">
                                <a href="http://www.itchihuahuaii.edu.mx/?page_id=880">Calidad</a>
                            </li>
                        </div>
                    </div></div><div class="directorio-footer-column">
                    <div class="directorio-footer">
                        <div class="Directorio_title">NORMATECA</div><br><br>			<div class="textwidget">
                            <li class="listado">
                                <a href="http://www.itchihuahuaii.edu.mx/?page_id=1298">Reglamentos</a>
                            </li>
                            <li class="listado">
                                <a href="https://drive.google.com/file/d/17mBUQIqlmICVW7VMkoUrKRrbMMNFBCvG/view?usp=sharing">Constitución Política de los E.U.M.</a>
                            </li>
                            <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=1306">Leyes</a></li></div>
                    </div>
                </div>
                <div class="directorio-footer-column">
                    <div class="directorio-footer">
                        <div class="Directorio_title">TEMAS DE INTERÉS</div><br><br>		
                        <div class="textwidget"><li class="listado"><a href="http://www.conricyt.mx/">CONRICyT</a></li>
                            <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/">Movilidad</a></li>
                            <li class="listado"><a href="https://drive.google.com/file/d/12NPXsVBKm3Ewoi6RoikTR2cBJyQtRYjr/view?usp=sharing">Conclusión Administración 2012-2018</a>
                            </li>
                            <li class="listado"><a href="https://drive.google.com/file/d/1AWzBBwT-5ppauxqdlhwfTF0-y5SWuhpi/view?usp=sharing">Rendición de Cuentas 2018</a>
                            </li>

                        </div>
                    </div>
                </div>
                <div class="directorio-footer-column">
                    <div class="directorio-footer"><div class="Directorio_title">OTROS ENLACES</div>
                        <br>			<div class="textwidget"><li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=867">Inglés</a></li>
                            <li class="listado"><a href="http://moodle.itchihuahuaii.edu.mx/">Moodle</a></li><li class="listado"><a href="https://www.tecnm.mx/convocatorias">Convocatorias</a></li>
                            <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=871">Multiverso TecNM</a></li>
                            <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=1404">Transparencia</a></li></div>
                    </div>
                </div>
            </div>	 

            <!-- Termina Reciente-->

            <!-- Inicia Footer-->


            <div class="footer-widgets-wrapper">

                <div class="inner-wrap">
                    <div class="footer-widgets-area clearfix">
                        <div class="tg-one-third">
                            <aside id="text-5" class="widget widget_text">
                                <div class="textwidget">
                                    <a href="https://www.facebook.com/ITChihuahuaII/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage( & #39; Imagen1 & #39; , & #39; & #39; , & #39; http://www.itchihuahuaii.edu.mx/img/facebook_color.png&#39;,1)" target="_blank">
                                        <img src="img/logos/redes_sociales/facebook_btn.png" name="Imagen1" width="40" height="37" border="0" id="Imagen1" title="Facebook">
                                    </a>
                                    <a href="https://twitter.com/_itchihuahuaii" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage( & #39; Imagen2 & #39; , & #39; & #39; , & #39; http://www.itchihuahuaii.edu.mx/img/tweet_color.png&#39;,1)" target="_blank">
                                        <img src="img/logos/redes_sociales/twitter_btn.png" name="Imagen2" width="40" height="37" border="0" id="Imagen2" title="Twitter">
                                    </a>
                                    <br>
                                </div>
                            </aside>			
                        </div>
                        <div class="tg-one-third">
                            <aside id="text-6" class="widget widget_text">			
                                <div class="textwidget"><a href="http://tecnm.mx/" target="_blank">
                                        <img src="img/logos/pielogoo.jpg">
                                    </a>
                                </div>
                            </aside>			
                        </div>

                        <div class="tg-one-third tg-one-third-last">

                        </div>
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
                <a href = "http://www.tecnm.mx/informacion/ayuda-del-portal-web">ayuda</a>
                &nbsp;
                &nbsp;
                <a href = "http://www.tecnm.mx/informacion/accesibilidad">accesibilidad</a>
                &nbsp;
                &nbsp;
                <a href = "http://www.itchihuahuaii.edu.mx/?page_id=685">mapa del sitio</a>
                &nbsp;
                &nbsp;
                <a href = "http://www.tecnm.mx/informacion/contacto-del-portal-web">contacto de portal</a>
                &nbsp;
                &nbsp;
                <a href = "http://www.tecnm.mx/informacion/contacto-del-portal-web">políticas de privacidad</a>
            </div>	



            <!-- Termina Footer-->
        </div>


    </body>

</html>