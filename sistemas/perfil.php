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

        <title>Perfil de Estudios</title>
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

        <div class="container"> <!-- Inicia container-->
            <div class="col-md-12">   

                <!-- Inicia contenido -->
                <div class="col-md-8">
                    <div class="col-md-12 text-center">
                        <h1>
                            MAESTRIA EN SISTEMAS COMPUTACIONALES
                        </h1>
                        <h2>
                            PERFIL DE EGRESO
                        </h2>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <p>El egresado del programa de Sistemas Computacionales será capaz de:</p>
                        <p>
                            <span class="glyphicon glyphicon-certificate"></span> Desarrollar el pensamiento abstracto y recursivo para resolver problemas complejos.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Desarrollar proyectos de investigación cubriendo todas sus etapas con actitud científica, crítica, responsable y prepositiva.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Aplicar las directrices de la ingeniería del software para crear productos con la calidad profesional requerida y demandada por los sectores de bienes y servicios.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Aplicar la programación orientada a objetos para solución de problemas reales.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Capacidad de analizar problemas que impliquen una solución computacional no convencional, desarrollando aplicaciones basadas en las técnicas de inteligencia artificial para su solución.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Solucionar problemas mediante las tecnologías de Internet.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Analizar y diseñar aplicaciones del mundo real que puedan implementarse de una manera eficiente en dispositivos móviles.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Solucionar problemas prácticos con el desarrollo de proyectos enfocados a la Web, construyendo aplicaciones robustas con nuevas tecnologías.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Aplicar estrategias de diseño adecuadas para implementar de manera efectiva e innovadora las tecnologías para la educación.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Aplicar herramientas en soluciones de problemas relacionados con procesamiento de imágenes.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Aplicar las principales técnicas de reconocimiento de patrones para la solución de problemas.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Diseñar sistemas de control difuso.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Capacidad para identificar los entornos para la aplicación de técnicas de reconocimiento de patrones avanzadas, diseñándolas e implementándolas en sistemas de cómputo.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Diseñar, evaluar e implementar interfaces humano-computadora.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Implementar las técnicas de procesamiento de lenguaje natural para la extracción implícita de la información útil en documentos.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Aplicar la programación evolutiva para la resolución de problemas NP completos.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span> Capacidad de resolver problemas complejos de diagnóstico, diseño, recuperación de información, toma de decisiones, minería de datos y minería de texto.
                            <br>
                        </p>
                        <h3>Campos de acción</h3>
                        <p>El egresado de la Maestría en Sistemas Computacionales podrá desempeñarse en las siguientes áreas:</p>
                        <p>
                            <span class="glyphicon glyphicon-certificate"></span>En empresas que se dediquen al desarrollo de software.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span>Instituciones que se dedique a la investigación y el desarrollo de nuevas tecnologías.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span>Instituciones de educación superior y posgrado.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span>Desarrollo e implementación de proyectos: Industriales, empresariales, sociales y de negocios.
                            <br>
                            <span class="glyphicon glyphicon-certificate"></span>Consultoría empresarial.
                        </p>
                    </div>
                </div> 
                <!-- Termina contenido -->


                <!-- Inicia widgets-->
                <?php
                require_once 'includes/widgets.php';
                ?>
                <!-- Termina widgets-->

            </div>
        </div> <!-- Termina container-->

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
