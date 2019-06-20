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

        <meta name="description" content="🎓 MAESTRÍA EN INGENIERÍA INDUSTRIAL, ALUMNOS POR COHORTE GENERACIONAL">
        <meta name="keywords" content="Maestría en ingeniería industrial, Maestría, Ingeniería Industrial, Alumnos, Cohorte Generacional">
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
            require_once 'includes/navbar_industrial.php';
            ?>
        </div>

        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>MAESTRÍA EN INGENIERÍA INDUSTRIAL</h1>
                    <h2>ALUMNOS POR COHORTE GENERACIONAL</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-8 col-md-offset-2 bloque col-sm-12 col-xs-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="success">
                                <th>Periodo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <a href="m_industrial_cohorte_2013.php">
                                        Cohorte 2013 
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <a href="m_industrial_cohorte_2014.php">
                                        Cohorte 2014 
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <a href="m_industrial_cohorte_2015.php">
                                        Cohorte 2015
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <a href="m_industrial_cohorte_2016.php">
                                        Cohorte 2016
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
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
