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

        <title>Coloquio</title>
    </head>
    <body class="bodyIndex">
        <!--Header-->
        <?php
        require_once 'includes/header.php';
        ?>
        <!--Navbar-->
        <div class="container">
            <?php
            require_once 'includes/navbar_noticias.php';
            ?>
        </div>

        <div class="container" style="text-align:justify;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Ceremonia de graduación de la segunda generación de los Posgrados del Instituto Tecnológico de Chihuahua II</h3>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="row ">
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg2" alt="..." src="../img\graduacion\2.jpg">
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg" alt="..." src="../img\graduacion\1.jpg">
                            <div id="myModal" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img01">
                            </div>
                            <script>
                                var modal = document.getElementById('myModal');
                                var img = document.getElementById('myImg');
                                var modalImg = document.getElementById("img01");
                                img.onclick = function () {
                                    modal.style.display = "block";
                                    modalImg.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[0];
                                span.onclick = function () {
                                    modal.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg4" alt="..." src="../img\graduacion\4.jpg">
                            <div id="myModal4" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img04">
                            </div>
                            <script>
                                var modal4 = document.getElementById('myModal4');
                                var img4 = document.getElementById('myImg4');
                                var modalImg4 = document.getElementById("img04");
                                img4.onclick = function () {
                                    modal4.style.display = "block";
                                    modalImg4.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[1];
                                span.onclick = function () {
                                    modal4.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg7" alt="..." src="../img\graduacion\7.jpg">
                            <div id="myModal7" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img07">
                            </div>
                            <script>
                                var modal7 = document.getElementById('myModal7');
                                var img7 = document.getElementById('myImg7');
                                var modalImg7 = document.getElementById("img07");
                                img7.onclick = function () {
                                    modal7.style.display = "block";
                                    modalImg7.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[2];
                                span.onclick = function () {
                                    modal7.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg5" alt="..." src="../img\graduacion\5.jpg">
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg6" alt="..." src="../img\graduacion\6.jpg">
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg8" alt="..." src="../img\graduacion\8.jpg">
                            <div id="myModal8" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img08">
                            </div>
                            <script>
                                var modal8 = document.getElementById('myModal8');
                                var img8 = document.getElementById('myImg8');
                                var modalImg8 = document.getElementById("img08");
                                img8.onclick = function () {
                                    modal8.style.display = "block";
                                    modalImg8.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[3];
                                span.onclick = function () {
                                    modal8.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg9" alt="..." src="../img\graduacion\9.jpg">
                            <div id="myModal9" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img09">
                            </div>
                            <script>
                                var modal9 = document.getElementById('myModal9');
                                var img9 = document.getElementById('myImg9');
                                var modalImg9 = document.getElementById("img09");
                                img9.onclick = function () {
                                    modal9.style.display = "block";
                                    modalImg9.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[4];
                                span.onclick = function () {
                                    modal9.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg10" alt="..." src="img\graduacion\10.jpg">
                            <div id="myModal10" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img010">
                            </div>
                            <script>
                                var modal10 = document.getElementById('myModal10');
                                var img10 = document.getElementById('myImg10');
                                var modalImg10 = document.getElementById("img010");
                                img10.onclick = function () {
                                    modal10.style.display = "block";
                                    modalImg10.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[5];
                                span.onclick = function () {
                                    modal10.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg3" alt="..." src="img\graduacion\3.jpg">
                            <div id="myModal3" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img03">
                            </div>
                            <script>
                                var modal3 = document.getElementById('myModal3');
                                var img3 = document.getElementById('myImg3');
                                var modalImg3 = document.getElementById("img03");
                                img3.onclick = function () {
                                    modal3.style.display = "block";
                                    modalImg3.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[6];
                                span.onclick = function () {
                                    modal3.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg11" alt="..." src="img\graduacion\11.jpeg">
                            <div id="myModal11" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img011">
                            </div>
                            <script>
                                var modal11 = document.getElementById('myModal11');
                                var img11 = document.getElementById('myImg11');
                                var modalImg11 = document.getElementById("img011");
                                img11.onclick = function () {
                                    modal11.style.display = "block";
                                    modalImg11.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[7];
                                span.onclick = function () {
                                    modal11.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg12" alt="..." src="img\graduacion\12.jpg">
                            <div id="myModal12" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img012">
                            </div>
                            <script>
                                var modal12 = document.getElementById('myModal12');
                                var img12 = document.getElementById('myImg12');
                                var modalImg12 = document.getElementById("img012");
                                img12.onclick = function () {
                                    modal12.style.display = "block";
                                    modalImg12.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[8];
                                span.onclick = function () {
                                    modal12.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg13" alt="..." src="img\graduacion\13.jpg">
                            <div id="myModal13" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img013">
                            </div>
                            <script>
                                var modal13 = document.getElementById('myModal13');
                                var img13 = document.getElementById('myImg13');
                                var modalImg13 = document.getElementById("img013");
                                img13.onclick = function () {
                                    modal13.style.display = "block";
                                    modalImg13.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[9];
                                span.onclick = function () {
                                    modal13.style.display = "none";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="responsive">
                        <div class="img-galeria">
                            <img id="myImg14" alt="..." src="img\graduacion\14.jpg">
                            <div id="myModal14" class="modal">
                                <span class="close">x</span>
                                <img class="modal-content" id="img014">
                            </div>
                            <script>
                                var modal14 = document.getElementById('myModal14');
                                var img14 = document.getElementById('myImg14');
                                var modalImg14 = document.getElementById("img014");
                                img14.onclick = function () {
                                    modal14.style.display = "block";
                                    modalImg14.src = this.src;
                                }
                                var span = document.getElementsByClassName("close")[10];
                                span.onclick = function () {
                                    modal14.style.display = "none";
                                }
                            </script>
                        </div>
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
    </body>
</html>