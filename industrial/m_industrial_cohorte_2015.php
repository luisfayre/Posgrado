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

        <title>Cohorte 2015-1</title>

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
                    <h1 class="principal">Maestría en sistemas computacionales</h1>
                    <h2>Alumnos por cohorte generacional 2015-1</h2 >
                </div>
            </div>
            <div class="row">
            </div>
            <div class="col-md-8 col-md-offset-2 bloque col-sm-12 col-xs-12">
                <table class="table table-striped" style="width: 100%; text-align:center;">
                    <thead>
                        <tr class="success">
                            <th>Nombre</th>
                            <th>Fecha de ingreso</th>
                            <th>Fecha de egreso</th>
                            <th>Grado</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr>
                            <th>Bermúdez Zambrano Antonio Ibraim</th>
                            <th>8/15</th>
                            <th>Cohorte Septiembre 2015</th>
                        </tr>
                        <tr>
                            <th>Bojórquez Armenta Daniel Joel</th>
                            <th>8/15</th>
                            <th>Cohorte Septiembre 2015</th>
                        </tr>
                        <tr>
                            <th>Escobar Rivero Eva María</th>
                            <th>8/15</th>
                            <th>Cohorte Septiembre 2015</th>
                        </tr>
                        <tr>
                            <th>Luna Orozco Ángel Manuel</th>
                            <th>8/15</th>
                            <th>Cohorte Septiembre 2015</th>
                        </tr>
                        <tr>
                            <th>Pérez Chavarría Arnoldo</th>
                            <th>8/15</th>
                            <th>Cohorte Septiembre 2015</th>
                        </tr>
                        <tr>
                            <th>Torres Cano Perla Rocío</th>
                            <th>8/15</th>
                            <th>Cohorte Septiembre 2015</th>
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
