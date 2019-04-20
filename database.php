<?php



    function conexion(){

    $servidor="sql9.freesqldatabase.com";
    $usuarioDB="sql9288398";
    $passwordDB="5gkI3RYHQa";
    $nombreDB="sql9288398";
        $conexion =mysqli_connect($servidor,$usuarioDB,$passwordDB, $nombreDB);




        return $conexion;
    }



?>