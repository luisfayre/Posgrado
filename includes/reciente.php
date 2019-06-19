<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './includes/mensaje_dia.php';
?>
<div class="divisor_sombra">
</div> 
<div id="4directorios" class="four_directories">
    <div class="directorio-footer-column">
        <div class="directorio-footer">
            <div class="Directorio_title">RECIENTE</div>
            <br>
            <br>			
            <div class="textwidget">
                <!--Examen-->
                <?php
                if (verifica_rango($date_inicio, $date_fin2, $date_nueva)) {
                    echo "
                        <li class=\"listado\">
                            <a href=\"http://moodle.itchihuahuaii.edu.mx/mod/quiz/view.php?id=10677\"target=\"_blank\">Examen
                            </a>
                        </li>";
                }
                ?>

                <li class="listado">
                    <a href="noticias/convocatoria.php">Maestría en Sistemas Computacionales
                    </a>
                </li>

                <li class="listado">
                    <a href="noticias/cuarta-jornada-academica.php">Cuarta Jornada Académica
                    </a>
                </li>

                <li class="listado">
                    <a href="noticias/tercer-jornada-academica.php">Tercer Jornada Académica
                    </a>
                </li>
                <!--li class="listado">
                    <a href="http://www.itchihuahuaii.edu.mx/?page_id=1726">Ambiental</a>
                </li>
                <li class="listado">
                    <a href="http://www.itchihuahuaii.edu.mx/?page_id=880">Calidad</a>
                </-->
            </div>
        </div></div><div class="directorio-footer-column">
        <div class="directorio-footer">
            <div class="Directorio_title">COLOQUIOS</div>
            <br>
            <br>
            <div class="textwidget">
                <li class="listado">
                    <a href="noticias/2017-coloquio-agosto-diciembre.php">Diciembre 2017</a>
                </li>
                <li class="listado">
                    <a href="noticias/2017-coloquio-enero-junio.php">Enero 2017</a>
                </li>
                <li class="listado">
                    <a href="noticias/2016-coloquio-agosto-diciembre.php">Agosto 2016</a>
                </li>
                <li class="listado">
                    <a href="noticias/2016-coloquio-enero-junio.php">Enero 2016</a>
                </li>
                <li class="listado">
                    <a href="noticias/2015-coloquio-agosto-diciembre.php">Dieciembre 2015</a>
                </li>
                <!--li class="listado">
                    <a href="https://drive.google.com/file/d/17mBUQIqlmICVW7VMkoUrKRrbMMNFBCvG/view?usp=sharing">Constitución Política de los E.U.M.</a>
                </li>
                <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=1306">Leyes</a>
                </li>
                -->
            </div>

        </div>
    </div>


    <div class="directorio-footer-column">
        <div class="directorio-footer">
            <div class="Directorio_title">TEMAS DE INTERÉS</div><br><br>		
            <div class="textwidget"><li class="listado"><a href="http://www.conricyt.mx/">CONRICyT</a></li>
                <li class="listado">
                    <a href="http://www.itchihuahuaii.edu.mx/">Movilidad</a></li>
                <li class="listado">
                    <a href="https://drive.google.com/file/d/12NPXsVBKm3Ewoi6RoikTR2cBJyQtRYjr/view?usp=sharing">Conclusión Administración 2012-2018</a>
                </li>
                <li class="listado">
                    <a href="https://drive.google.com/file/d/1AWzBBwT-5ppauxqdlhwfTF0-y5SWuhpi/view?usp=sharing">Rendición de Cuentas 2018</a>
                </li>

            </div>
        </div>
    </div>


    <div class="directorio-footer-column">
        <div class="directorio-footer"><div class="Directorio_title">RELACIONADO</div>
            <br>			<div class="textwidget"><li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=867">Inglés</a></li>
                <li class="listado"><a href="http://moodle.itchihuahuaii.edu.mx/">Moodle</a></li><li class="listado"><a href="https://www.tecnm.mx/convocatorias">Convocatorias</a></li>
                <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=871">Multiverso TecNM</a></li>
                <li class="listado"><a href="http://www.itchihuahuaii.edu.mx/?page_id=1404">Transparencia</a></li></div>
        </div>
    </div>
</div>	