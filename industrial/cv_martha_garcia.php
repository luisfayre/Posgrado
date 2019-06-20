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

        <title>Martha Patricia García Martínez</title>
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
                            <img clas="img-responsive" src="../img/cv/Martha_GarcIa.jpg" alt="">
                            <h2>Martha Patricia García Martínez</h2>
                            <p>CORREO: patytec2@yahoo.com
                                <br> Instituto Tecnológico de Chihuahua II:
                            </p>
                        </div>
                        <p>ADSCRIPCIÓN ACTUAL
                            <br> 12/1992-2019
                        </p>
                        <blockquote>
                            <p>-</p>
                        </blockquote>
                        <p>ARTÍCULOS </p>
                        <blockquote>
                            <table>
                                <tr>
                                    <td valign=top>2014&nbsp;</td>
                                    <td>
                                        <strong>
                                            Identificación de los factores que originan el estrés laboral en una empresa del sector aeroespacial
                                        </strong>
                                        Congreso Internacional de Investigación Academia Journals 2014, Juárez, Chihuaua, México.
                                    </td>
                                </tr>
                                <tr>
                                    <td valign=top>2014&nbsp;</td>
                                    <td>
                                        <strong>
                                            Evaluación del método LEST para el diseño ergonómico de puestos de trabajo en una empresa del sector aeroespacial
                                        </strong>
                                        <br>
                                        Congreso Internacional de Investigación Academia Journals 2014, Juárez, Chihuaua, México 
                                    </td>
                                </tr>
                                <tr>
                                    <td valign=top>2013&nbsp;</td>
                                    <td>
                                        <strong>
                                            PERCEPCION DE FIABILIDAD ACADEMICA SOBRE METODOLOGIAS EN LA PEDAGOGIA LUDICA
                                        </strong>
                                        <br>
                                        Congreso Internacional de Investigación Academia Journals, Cd. Juárez, México 
                                    </td>
                                </tr>

                                <tr>
                                    <td valign=top>2011&nbsp;</td>
                                    <td>
                                        <strong>
                                            Developing of a Plug&Lean-CiMo a model for improving manufacturing operations
                                        </strong>
                                        <br>
                                        En la 5ta Conferencia Internacional en Ingeniería Industrial y Manejo Industrial, Cartagena  
                                    </td>
                                </tr>
                                <tr>
                                    <td valign=top>2011&nbsp;</td>
                                    <td>
                                        <strong>
                                            Development of a wireless Plug&Lean system for improving manufacturing equipment diagnosis, 
                                        </strong>
                                        <br>
                                        International Journal of Computer Integrated Manufacturing 
                                    </td>
                                </tr>
                            </table>
                        </blockquote>
                        <p>NIVELES/GRADOS ACADÉMICOS </p>
                        <blockquote>
                            <table>
                                <tr>
                                    <td valign=top>01/2012&nbsp;</td>
                                    <td>
                                        <strong>DOCTORADO</strong>,
                                        en Ciencias Ingeniería Industrial, Univesidad de Navarra, España.
                                    </td>
                                </tr>
                                <tr>
                                    <td valign=top>2001&nbsp;</td>
                                    <td><strong>MAESTRÍA</strong>
                                        en Ciencias en Ingeniería Industrial, New Mexico State Universiy, U.S.A.
                                    </td>
                                </tr>
                            </table>
                        </blockquote>
                    </div>
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