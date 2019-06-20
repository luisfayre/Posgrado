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

        <title>Mario Antonio Makita Aguilar</title>
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
                    <h2>DIVISIÓN DE ESTUDIOS DE
                        POSGRADO E INVESTIGACIÓN
                    </h2>
                </div>
            </div>
            <div class="row bloque">
                <h4 class="text-center">Docente </h4>
                <div class="jumbotron cv">
                    <div class="container">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <img class="img-responsive" src="../img/cv/mario_makita.jpg">
                                </div>
                            </div>
                            <div class="row">
                                <h2>Mario Antonio Makita Aguilar</h2>
                                <p>CORREO:sixsigma.tec2@live.com
                                    <br> Instituto Tecnológico de Chihuahua II:
                                </p>
                            </div>
                        </div>
                        <p>ADSCRIPCIÓN ACTUAL
                            <br> 09/1979-2019
                        </p>
                        <blockquote>
                            <p>-</p>
                        </blockquote>
                        <p>ARTÍCULOS </p>
                        <blockquote>
                            <table>
                                <tr>
                                    <td valign=top>2013&nbsp;</td>
                                    <td>
                                        <strong>Uso de la metodología de las superficies de respuesta para diseñar los parámetros de la biolixiviación de cobre en un cultivo continuo mediante acidithiobacillus ferrooxidans. </strong>
                                        Memorias del Congreso Internacional de Investigación Multidisciplinario, ITESM, Chihuahua. Makita, M. A y Esperón, M .
                                    </td>
                                </tr>
                                <tr>
                                    <td valign=top>2011&nbsp;</td>
                                    <td>
                                        <strong>
                                            Microdureza profunda en una resina compuesta foto polimerizada por diferentes fuentes de luz.
                                        </strong>
                                        Medellin: CES Odontología/ ISSN 0120-971X Facultad de Odontología, Universidad CES, (23), 2. Makita, M. A, Nevárez, A., Bologna, R., Serena, E., Orrantia, E., y Nevárez, M
                                    </td>
                                </tr>
                            </table>
                        </blockquote>

                        <p>NIVELES/GRADOS ACADÉMICOS </p>
                        <blockquote>
                            <table>
                                <tr>
                                    <td valign=top>27/08/2004&nbsp;</td>
                                    <td>Doctorado,en ciencia de materiales, CIMAV</td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td valign=top>29/05/1992&nbsp;</td>
                                    <td>Maestria,en producción animal - ciencia de la carne, Facultad de Zootecnia</td>
                                </tr>
                            </table>
                        </blockquote>
                    </div>
                </div>
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
