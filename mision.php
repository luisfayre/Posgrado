<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--link rel="stylesheet" href="css/style.css"-->
        <link rel="stylesheet" href="css/style_tec.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/javascript.js"></script>
        <script type="text/javascript" src="js/jquery.slidepanel.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.slidepanel.css">
        <title>DEPI</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink" href="barraDEPI.html"></a>
        <div class="container" style="text-align:justify;">

        </div>





        <div class="container">
            <div class="col-md-12">

                <!-- Contenido -->

                <div class="col-md-8">
                    <div class="row ">
                        <div class="col-md-12 bloque col-sm-12">
                            <h4 class="noticia">
                                Misión
                            </h4>
                            <br>

                        </div>


                        <div class="col-md-12 col-sm-12 " style="text-align: justify">

                            <p>Contribuir a la formación del capital humano analítico, creativo, ético y competitivo, con una óptica
                                global, responsabilidad social y congruencia con las necesidades del entorno; que apliquen la
                                ciencia y la tecnología en el desarrollo y transformación de los factores económicos y productivos
                                del país para la formación de una sociedad justa y humana. </p>
                            <br>
                            <h4 class="noticia">Visión</h4>

                            <p>Ser un posgrado con reconocimiento global gracias a su excelencia académica y la calidad en la
                                formación profesional, ética y humanística de egresados con un espíritu emprendedor e investigador.
                                Ser punto de partida de un desarrollo sostenido, sustentable y equitativo del País a través de las
                                aportaciones que los egresados realicen a la ciencia y la tecnología. </p>

                            <br>
                            <br>
                            <div class="imgDEPI" style="text-align: center;">

                                <img id="imgDEPI" src="img/organigrama/organigrama_2019.png" alt="Organigrama" />


                            </div>



                            <div class="media marcos thumbnail">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img class="media-object" src="img/cv/Ilya_2.jpg" alt="Ilya" width=100 height=162>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Ilya Lorena Sánchez Rivera</h4>

                                    <p>Correo: 
                                        <a href="mailto:ilyasanchez@hotmail.com">ilyasanchez@hotmail.com</a>
                                    </p>
                                    <p> 16/09/1998 - 2016 Tecnológico Nacional De México / Instituto Tecnológico De Chihuahua II,
                                        Coordinadora de la Maesría en Sistemas Computacionales, Tiempo completo</p>
                                    <p>
                                    </p>
                                </div>
                            </div>


                            <div class="media marcos thumbnail">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <img class="media-object" src="img/img_perfil.jpg" alt="Villapando" width=100 height=162>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Dra. Luisa Yolanda Quiñones Montenegro</h4>
                                    <p>Correo: 
                                        <a href="mailto:posgradomii@hotmail.com">posgradomii@hotmail.com</a>
                                    </p>

                                    <p>05/2007 - 2016 Tecnológico Nacional De México / Instituto Tecnológico De Chihuahua II, Coordinador de
                                        la Maesría en Ing. Ind. Tiempo completo
                                    </p>
                                </div>
                            </div>




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

    </body>

</html>