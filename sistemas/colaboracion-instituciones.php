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

        <title>Colavoracion</title>
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
            <div class="col-md-12 text-center">
                <h1>
                    MAESTRIA EN SISTEMAS COMPUTACIONALES
                </h1>
                <h2>COLABORACION CON OTRAS INSTITUCIONES</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/logos/uacj-logo.jpg" alt="Universidad Autónoma de Ciudad Juárez Logo">
                        <div class="caption text-center ">
                            <h4>Universidad Autónoma de Ciudad Juárez</h4>
                            <p>www.uacj.mx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/logos/itech-logo.png" alt="Instituto Tecnológico de Chihuahua Logo">
                        <div class="caption text-center ">
                            <h4>Instituto Tecnológico de Chihuahua</h4>
                            <p>www.itch.edu.mx//</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/logos/utech-logo.png" alt="Universidad Tecnológica de Chihuahua Logo">
                        <div class="caption text-center ">
                            <h4>Universidad Tecnológica de Chihuahua</h4>
                            <p>http://www.utch.edu.mx/</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/logos/utcj-logo.png" alt="Universidad Tecnológica de Ciudad Juarez Logo">
                        <div class="caption text-center ">
                            <h4>Universidad Tecnológica de Ciudad Juarez</h4>
                            <p>http://www.utcj.edu.mx/</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/logos/logoutt.jpg" alt="Universidad Tecnologica de la Tarahumarama Logo">
                        <div class="caption text-center ">
                            <h4>Universidad Tecnologica de la Tarahumara</h4>
                            <p>www.uttarahumara.edu.mx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="../img/logos/upolitecnicachihuahua-logo.png" alt="Universidad Politecnica de Chihuahua Logo">
                        <div class="caption text-center ">
                            <h4>Universidad Politecnica de Chihuahua</h4>
                            <p>http://www.upchihuahua.edu.mx/</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="../img/logos/institutosuperiorNCS-logo.png" alt="Instituto Tecnológico Superior de Nuevo Casas Grandes Logo">
                            <div class="caption text-center ">
                                <h4>Instituto Tecnológico Superior de Nuevo Casas Grandes</h4>
                                <p>http://www.itsncg.edu.mx/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="../img/logos/itcj-logo.jpg" alt="Instituto Tecnológico de Ciudad Juárez Logo">
                            <div class="caption text-center ">
                                <h4>Instituto Tecnológico de Ciudad Juárez</h4>
                                <br>
                                <p>http://www.itcj.edu.mx/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="../img/logos/itparral-logo.jpg" alt="Instituto Tecnológico de Parral Logo">
                            <div class="caption text-center ">
                                <h4>Instituto Tecnológico de Parral</h4>
                                <br>
                                <p>http://www.itparral.edu.mx/</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="../img/logos/itcuahutemoc-logo.png" alt="Instituto Tecnológico de CD. Cuauhtémoc Logo">
                            <div class="caption text-center ">
                                <h4>Instituto Tecnológico de CD. Cuauhtémoc</h4>
                                <p>http://www.itcdcuauhtemoc.edu.mx/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="../img/logos/tecdelicias-logo.png" alt="Instituto Tecnológico de Delicias Logo">
                            <div class="caption text-center ">
                                <h4>Instituto Tecnológico de Delicias</h4>
                                <p>http://www.itdelicias.edu.mx/</p>
                            </div>
                        </div>
                    </div>
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
