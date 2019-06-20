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

        <title>Rosa Maria Amaya</title>
    </head>

    <body class="bodyIndex">
        <!--Header-->
        <?php
        require_once 'includes/header.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_industrial.php';
            ?>
        </div>

        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>DIVISIÓN DE ESTUDIOS DE
                        POSGRADO E INVESTIGACIÓN
                    </h2>
                </div>
            </div>
            <div class="row bloque">
                <h4 class="text-center">Docente </h4>
                <div class="jumbotron cv">
                    <div class="container">
                        <div class="text-center">
                            <img clas="img-responsive" src="../img/cv/rosa_amaya.jpg" alt="">
                            <h2>M.C. Rosa Ma. Amaya Toral</h2>
                            <p>CORREO:
                                <br> Instituto Tecnológico de Chihuahua II:
                            </p>
                        </div>
                        <p>ADSCRIPCIÓN ACTUAL
                            <br>
                        </p>
                        <blockquote>
                            <p>-</p>
                        </blockquote>
                        <p>ARTÍCULOS </p>
                        <blockquote>
                            <table>
                                <tr>
                                    <td valign=top>2014&nbsp;</td>
                                    <td><strong></td>
                                </tr>
                            </table>
                        </blockquote>
                        <p>NIVELES/GRADOS ACADÉMICOS </p>
                        <blockquote>
                            <table>
                                <tr>
                                    <td valign=top>-&nbsp;</td>
                                    <td><strong>MAESTRIA</strong>,Ciencias en Ingeniería Industrial del Instituto
                                        Tecnológico de Cd. Juárez, cédula: 2840407).</td>
                                </tr>
                                <tr>
                                    <td valign=top>-&nbsp;</td>
                                    <td><strong>LICENCIATURA</strong>Ingeniería Industrial en Producción. Instituto
                                        Tecnológico de Chihuahua, cédula: 1541069.</td>
                                </tr>
                            </table>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Noticas-->

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
    </body>

</html>
