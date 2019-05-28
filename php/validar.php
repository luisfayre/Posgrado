<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!isset($_POST['submit'])) {
    
    $usuario = isset($_POST['user']) ? $_POST['user'] : false;
    $contrasena = isset($_POST['password']) ? $_POST['password'] : false;
    
    
    echo "$usuario";
    echo "<br>";
    echo "$contrasena";
   
    // var_dump($_POST);
}

/*
  echo $v1 = $_POST['user'];
  echo $v2 = $_POST['password'];
 */
//var_dump($_POST);
