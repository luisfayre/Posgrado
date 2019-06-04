<?php

//echo "Today is " . date("Y-m-d") . "<br>";
//echo "Today is " . date("h:i:sa") . "<br>";
function verifica_rango($date_inicio, $date_fin, $date_nueva) {
    $date_inicio = strtotime($date_inicio);
    $date_fin = strtotime($date_fin);
    $date_nueva = strtotime($date_nueva);
    if (($date_nueva >= $date_inicio) && ($date_nueva <= $date_fin)) {
        return true;
    } else {
        return false;
    }
}

$date_nueva = date('Y-m-d');
$date_inicio = date('Y-06-01');
$date_fin = date('Y-06-06 ');
$date_inicio2 = date('Y-06-07');
$date_fin2 = date('Y-06-07');
//echo "Today is " . $date_inicio2 . "<br>";
//echo "Today is " . $date_fin2 . "<br>";
$mensaje1 = 'Recuerda que el examen será el 7 de junio del 2019 en la plataforma moodle.';
$mensaje2 = 'Recuerda que el examen será hoy a las 18:00 horas.';

