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

        <title>Lineas</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink2" href="barraMSist.html"></a>
        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>
                        MAESTRIA EN SISTEMAS COMPUTACIONALES
                    </h1>
                    <h2>
                        LÍNEAS DE INVESTIGACIÓN
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="img/tec-apli-edu.jpg" alt="" class="img-responsive">
                    <section class="box">
                        <header>
                            <h3>LGAC: Tecnologías Aplicadas a la Educación</h3> Desarrollar las competencias específicas de creación de productos de software utilizando tecnologías de objetos de aprendizaje, e-learning, inteligencia artificial y almacenamiento y recuperación de conocimiento, que ofrecen las ciencias computacionales para hacer eficaces los procesos de formación y capacitación en sectores educativos, productivos, de bienes y servicios.
                            <br>
                            <br>
                            <span style="color: white;">.</span></header>
                    </section>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="img/sis-int.jpg" alt="" class="img-responsive">
                        <section class="box">
                            <header>
                                <h3>LGAC: Sistemas Inteligentes</h3> Desarrollar sistemas que simulen aspectos del comportamiento inteligente, con la intención de aprender de la naturaleza para poder diseñar y construir software inteligente que pueda representar su propio conocimiento y razonar sobre él, que puedan planificar y actuar, que puedan asimilar nuevo conocimiento de la experiencia y de la interacción con el entorno y que en definitiva, pueda llevar a cabo cualquier tarea propia de los seres inteligentes, con base en las evidencias de productividad.
                                <br>
                                <br>
                            </header>
                        </section>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12">
                    <img src="img/sist-embe.jpg" alt="" class="img-responsive">
                    <section class="box">
                        <header>
                            <h3>LGAC: Sistemas Embebidos</h3> Generar conocimiento y experiencia para el análisis, diseño e implementación de soluciones y tecnologías con sistemas embebidos aplicables en la automatización de procesos industriales y residenciales, con énfasis en domótica, a través de proyectos de investigación propios y vinculados con empresas y/o dependencias de la región, para la transferencia de tecnología y conocimiento, el registro de propiedad intelectual y la generación de riqueza.
                            <br>
                            <br>
                        </header>
                    </section>
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

    </body>

</html>
