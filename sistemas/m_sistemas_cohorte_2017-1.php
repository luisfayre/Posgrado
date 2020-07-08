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

        <title>Cohorte 2017-1</title>

        <meta name="description" content="🎓 MAESTRÍA EN SISTEMAS COMPUTACIONALES, ALUMNOS POR COHORTE 2017-1 GENERACIONAL">
        <meta name="keywords" content="Maestría en sistemas computacionales,Maestría,sistemas computacionales,alumnos,cohorte generacional">
        <meta name="author" content="Instituto Tecnologico de Chihuahua II">

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
                    <h1 class="principal" style="color:rgb(27, 57, 106)">Maestría en sistemas computacionales</h1>
                    <h2>Alumnos por cohorte generacional 2017-1</h2 >
                </div>
            </div>
            <div class="row">
            </div>
            <div class="col-md-8 col-md-offset-2 bloque col-sm-12 col-xs-12">
                <table class="table table-striped" style="width: 100%; text-align:center;">
                    <thead>
                        <tr class="success">
                            <th>Nombre</th>
                            <th>Tema de Tesis</th>
                            <th>Fecha de ingreso</th>
                            <th>Fecha de egreso</th>
                            <th>Grado</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr>
                            <th>LAURA ITZEL PAYÁN SIVITOS</th>
                            <th>
                                <a href="./../documentos/tesis/2017/Implementación de un curso adaptativo basado en estilos de aprendizaje mediante lógica difusa - Laura itzel payán sivitos.pdf">
                                    Implementación de un curso adaptativo basado en estilos de aprendizaje mediante lógica difusa
                                </a>
                            </th>
                            <th>01/17</th>
                            <th>27/06/19</th>
                            <th>MAESTRO(A)</th>
                        </tr>
                        <tr>
                            <th>GUSTAVO ADOLFO RIVAS HERNÁNDEZ</th>
                            <th>
                                <a>
                                    Aprendizaje adaptativo mediante conocimientos previos para la materia de fundamentos de programación
                                </a>
                            </th>
                            <th>01/17</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <tr>
                            <th>JORGE HUGO TERRAZAS RODRÍGUEZ</th>
                            <th>
                                <a>
                                    Sistema de comprensión lectora y cálculo mental
                                </a>
                            </th>
                            <th>01/17</th>
                            <th></th>
                            <th></th>
                        </tr>

                        <tr>
                            <th>JOSÉ LUIS CASTRO LOZOYA</th>
                            <th>
                                <a>
                                    Prototipo didáctico de inspección visual
                                </a>
                            </th>
                            <th>01/17</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>LUIS FERNANDO ESPINOSA TREJO</th>
                            <th>
                                <a>
                                    Análisis de desempeño de la red de sensores inalámbricos inteligentes en una huerta manzanera
                                </a>
                            </th>
                            <th>01/17</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>PAULINA PATRICIA QUEZADA LEYVA</th>
                            <th>
                                <a>
                                    Asistente para ejercicios de rehabilitación para niños con capacidades diferentes
                                </a>
                            </th>
                            <th>01/17</th>
                            <th></th>
                            <th></th>
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
