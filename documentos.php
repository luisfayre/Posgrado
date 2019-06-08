<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Estilos-->
        <link rel="stylesheet" href="css/style.css">
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

        <title>Documentos</title>
        <script src="js/ddmenu.js" type="text/javascript"></script>
    </head>

    <body class="bodyIndex">
        <a id="ddmenuHeader" href="headerDEPI.html"></a>
        <!--Barra de navegacion-->
        <a id="ddmenuLink" href="barraDEPI.html"></a>
        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Documentos</h2>
                </div>
            </div>
            <div class="row bloque">
                <div class="col-md-12 col-sm-12">
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/Casos Especiales.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Casos Especiales</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FormatoConstanciaNoAdeudos(FCNA-09).docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Constancia No Adeudos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FormatoAceptacionPropuestaTesisFAP-04Act.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Aceptacion Propuesta Tesis</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FormatoPropuestaTemaTesisFTT-02Act.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Propuesta Tema Tesis</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FORMATO DEL DOCUMENTO DE  TESIS DE MAESTRIAEn2015.pdf">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Del Documento De Tesis</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FormatoEntregaAvancedeTesisFRAT-05.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Entrega Avance De Tesis </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FORMATO-INGRESO-MAESTRIA-FSI-2019.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Solicitud de Ingreso Maestría</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FormatoSeguimientoTesisSemFSTE-003.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Seguimiento Tesis</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="ResetLink" href="documentos/FormatoSeguimientoTutoriasFST-10A.docx">
                            <div class="documentos">
                                <div class="caption text-center ">
                                    <p>Formato Seguimiento Tutorias</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            require_once 'includes/reciente.php';
            ?>

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
