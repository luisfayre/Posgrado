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

        <meta name="description" content="🎓 La maestría en sistemas computacionales es un programa único profesionalizante dentro del Padrón de Nacional de posgrados de calidad en la región con las líneas de generación y aplicación del conocimiento en: Sistemas Inteligentes, Tecnología Aplicada a La Educación y Sistemas Embebidos.">
        <meta name="keywords" content="Maestría en sistemas computacionales, Sistemas Inteligentes, Tecnología Aplicada a La Educación, Sistemas Embebidos, Programa Nacional de posgrados de calidad">
        <meta name="author" content="División de estudios de posgrado e investigación Instituto Tecnologico de Chihuahua II">

        <title>🎓 Maestría en Sistemas Computacionales</title>
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

        <div class="container">
            <div class="col-md-12">

                <!--Contenido-->

                <div class="col-md-8">

                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1>MAESTRÍA EN SISTEMAS COMPUTACIONALES</h1>
                        </div>

                        <br>

                        <div class="row text-justify">

                            <h2 class="noticia" style="color:rgb(27, 57, 105);">¡Bienvenido!</h2>
                            <p>
                                El programa de la maestría en sistemas computacionales que ofrece el Instituto Tecnológico de Chihuahua II
                                es un programa único profesionalizante dentro del Padrón de Nacional de posgrados de calidad en la región 
                                con las líneas de generación y aplicación del conocimiento en: Sistemas Inteligentes, Tecnología Aplicada 
                                a La Educación y Sistemas Embebidos, donde puedes inscribirte con el fin desarrollar una solución a problemas 
                                específicos en tu trabajo, innovar aplicaciones de TI, realizar investigación aplicada y obtener un grado 
                                académico de maestría
                            </p>
                            <p>
                                ¿Cuentas con una licenciatura a fin a las TIC’s? ¿Tienes en mente algún proyecto de TI? ¿Quieres
                                actualizarte? ven con nosotros e inscríbete y cumple tus sueños de calidad, validado por el CONACYT.
                            </p>

                            <h2>Información del programa</h2>

                            <p>Coordinador: Ilya Lorena Sánchez Rivera</p>
                            <p>Correo: ilyasanchez@hotmail.com</p>
                            <p>Teléfonos: 4-42-50-32</p>
                            <p>Horario de atención: 8 a.m. a 8 p.m.</p>

                            
                            
                        </div>

                    </div>

                </div>

                <!-- Widget-->
                <?php
                require_once 'includes/widgets.php';
                ?>

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