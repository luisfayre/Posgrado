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

        <title>Cohorte</title>

        <meta name="description" content="🎓 MAESTRÍA EN SISTEMAS COMPUTACIONALES, ALUMNOS POR COHORTE GENERACIONAL">
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
                    <h1 class="principal" style="color:rgb(27, 57, 106)">MAESTRÍA EN SISTEMAS COMPUTACIONALES</h1>
                    <h2>ALUMNOS POR COHORTE GENERACIONAL</h2 >
                </div>
            </div>
            <div class="row">
            </div>
            <div class="col-md-8 col-md-offset-2 bloque col-sm-12 col-xs-12">
                <table class="table table-striped" style="width: 100%; text-align:center;">
                    <thead>
                        <tr class="success">
                            <th>Periodo</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2013.php">
                                    Cohorte 2013 
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2014.php">
                                    Cohorte 2014
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2015-1.php">
                                    Cohorte 2015-1
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2015-2.php">
                                    Cohorte 2015-2
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2016-1.php">
                                    Cohorte 2016-1
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2016-2.php">
                                    Cohorte 2016-2
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2017-1.php">
                                    Cohorte 2017-1
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2017-2.php">
                                    Cohorte 2017-2
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2018-1.php">
                                    Cohorte 2018-1
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2018-2.php">
                                    Cohorte 2018-2
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2019-1.php">
                                    Cohorte 2019-1
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="m_sistemas_cohorte_2019-2.php">
                                    Cohorte 2019-2
                                </a>
                            </th>
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
