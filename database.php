<?php

/*function conexion()
{

//hostin,usuario,contra,nombredelaDB
return $conexion= mysqli_connect("localhost","root","","controltimer");
}
*/
/// nueva conexcion prueba
/*
$servidor="localhost";
$usuarioDB="comuesco_controltimer";
$passwordDB="CONTROLtimer2384.";
$nombreDB="comuesco_dbo_ctrl";
*/
function conexion(){
    $servidor="sql9.freesqldatabase.com";
    $usuarioDB="sql9288398";
    $passwordDB="5gkI3RYHQa";
    $nombreDB="sql9288398";
    
    $conexion = new mysqli($servidor,$usuarioDB,$passwordDB,$nombreDB);
    
    if($conexion->connect_error){
    die("-----conexcion faida------- ".$conexion->connect_error);
    }
    else{
        
    }

return $conexion;
}
?>