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

        <title>M.Insdutrial</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink2" href="barraDEPI.html"></a>
        <div class="container text-center">
            <h2>Favor de enviarlo al correo:</h2>
            <h3>ciiit@itchihuahuaii.edu.mx</h3>
            <br>
            <br>
            <a class="btn btn-primary btn-lg" href="documentos/formulario_de_inventario_de_habilidades.docx">Descargar formulario</a>
        </div>


        <div class="container">
            <?php
            require_once 'includes/reciente.php';
            ?>

            <?php
            require_once 'includes/footer.php';
            ?>
        </div>
    </body>

</html>