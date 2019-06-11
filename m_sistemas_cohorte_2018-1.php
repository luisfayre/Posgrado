<!DOCTYPE html>
<html lang="en">

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

        <title>Cohorte 2018-1</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink2" href="barraMSist.html"></a>
        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="principal">Maestría en sistemas computacionales</h1>
                    <h2>Alumnos por cohorte generacional 2018-1</h2 >
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
                            <th>DAVID FERNANDO ROMO MARIN</th>
                            <th>01/18</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>JESÚS FRANCISCO DUARTE MARTÍNEZ</th>
                            <th>01/18</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>DANIELA IRANIA GARCÍA ALMEIDA</th>
                            <th>01/18</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>MICHAEL REYES</th>
                            <th>01/18</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>RUBÉN ARTURO DOMÍNGUEZ ALTAMIRANO</th>
                            <th>01/18</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>RUBÉN ALONSO HERNÁNDEZ CHÁVEZ</th>
                            <th>01/18</th>
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
