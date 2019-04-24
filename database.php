<?php
    function conexion(){
    $servidor="sql9.freesqldatabase.com";
    $usuarioDB="sql9289396";
    $passwordDB="8meqUcv2bi";
    $nombreDB="sql9289396";
        $conexion =mysqli_connect($servidor,$usuarioDB,$passwordDB, $nombreDB);
        return $conexion;
    }
?>