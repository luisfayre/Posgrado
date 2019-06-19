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

        <title>Líneas de investigación</title>

        <meta name="description" content="🎓 Desarrolla competencias específicas de creación de productos de software utilizando tecnologías de objetos de aprendizaje, e-learning, inteligencia artificial y almacenamiento y recuperación de conocimiento, que ofrecen las ciencias computacionales." <meta name="keywords" content="ITCHI II,DEPI,sistemas inteligentes, Posgrado ITCHI II,Posgrado,tecnologías aplicadas,educación,Chihuhua,Maestria">
        <meta name="author" content="DEPI Instituto Tecnologico de Chihuahua II">
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
                    <h1 class="principal">
                        Maestría en sistemas computacionales
                    </h1>
                    <h2>
                        Líneas de investigación
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="../img/sistemas/lineas_investigacion/tecnologias_aplicadas_educacion.jpg"  alt="Tecnologías Aplicadas a la Educación" class="img-responsive">
                    <section class="box">
                        <header>
                            <h3>LGAC: Tecnologías Aplicadas a la Educación
                            </h3> 
                            Desarrollar las competencias específicas de creación de productos de software utilizando tecnologías de objetos de aprendizaje, e-learning, inteligencia artificial y almacenamiento y recuperación de conocimiento, que ofrecen las ciencias computacionales para hacer eficaces los procesos de formación y capacitación en sectores educativos, productivos, de bienes y servicios.
                            <br>
                            <br>
                        </header>
                    </section>
                </div>

                <div class="col-md-6 col-sm-12">
                    <img src="../img/sistemas/lineas_investigacion/sistemas_inteligentes.jpg" alt="Sistemas Inteligentes" class="img-responsive">
                    <section class="box">
                        <header>
                            <br>
                            <br>
                            <h3>LGAC: Sistemas Inteligentes</h3> 
                            Desarrollar sistemas que simulen aspectos del comportamiento inteligente, con la intención de aprender de la naturaleza para poder diseñar y construir software inteligente que pueda representar su propio conocimiento y razonar sobre él, que puedan planificar y actuar, que puedan asimilar nuevo conocimiento de la experiencia y de la interacción con el entorno y que en definitiva, pueda llevar a cabo cualquier tarea propia de los seres inteligentes, con base en las evidencias de productividad.
                            <br>
                            <br>
                        </header>
                    </section>
                </div>

            </div>
        </div>

        }

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
