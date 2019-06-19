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

        <title>Objetivos</title>
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
                    <h2>
                        OBJETIVO GENERAL
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>Formar capital humano que desarrolle sistemas computacionales con fines de resolver problemas reales en los sectores productivo, social y de servicios, en el área de los sistemas inteligentes o de las tecnologías aplicadas a la educación, proporcionando soluciones de calidad.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 bloque col-sm-12">
                    <h4>OBJETIVOS ESPECÍFICOS</h4>
                    <table>
                        <tbody>
                            <tr>
                                <td><span><span class="glyphicon glyphicon-certificate"></span> Formar recursos humanos a nivel graduados de acuerdo con el Plan Nacional de Desarrollo.
                                        <br>
                                        <span class="glyphicon glyphicon-certificate"></span> Organizar y participar con empresas en proyectos que permitan acceder a conocimientos avanzados en tópicos especializados de las líneas de trabajo.
                                        <br>
                                        <span class="glyphicon glyphicon-certificate"></span>Desarrollar propuestas innovadoras para procesos, productos y paquetes tecnológicos en las organizaciones basados en sistemas computacionales.
                                        <br>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
