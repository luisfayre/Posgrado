<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_tec';

$db = mysqli_connect($server, $username, $password, $database);


mysqli_query("SET NAMES", 'utf8');
