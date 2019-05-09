<?php
//en linea
   /* function conexion(){
    $servidor="sql3.freesqldatabase.com";
    $usuarioDB="sql3290257";
    $passwordDB="XYjgVnwC48";
    $nombreDB="sql3290257";
        $conexion =mysqli_connect($servidor,$usuarioDB,$passwordDB, $nombreDB);
        return $conexion;
    }*/
//local

function conexion(){
    $servidor="localhost";
    $usuarioDB="root";
    $passwordDB="";
    $nombreDB="dbo_ctrl";
        $conexion =mysqli_connect($servidor,$usuarioDB,$passwordDB, $nombreDB);
        return $conexion;
    }

?>