<?php   
    $conexion=new PDO("mysql:host=localhost; dbname=clime_home" , "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion-> exec("SET CHARACTER SET utf8");
?>