<?php
$datos=$_POST['txt'];
require('database.php');

$conexion=conexion();
// estas variables guardan las fechas y oras
date_default_timezone_set('America/El_Salvador');
$oraActual=date('H:i');
$fechaActual=date('y-m-d');

$busqueda="SELECT * FROM tab_asis WHERE Cod_Usua='$datos' AND Fec_Regi='$fechaActual'";
$pru=mysqli_query($conexion,$busqueda);
if($pru->num_rows > 0){
    $sql="UPDATE tab_asis SET Reg_Salida='$oraActual' WHERE Cod_Usua='$datos' AND Fec_Regi='$fechaActual'" ;
}
else{
    $sql="INSERT INTO tab_asis (Cod_Usua,Reg_Entr,Reg_Salida,Fec_Regi) VALUES ('$datos','$oraActual','','$fechaActual')";
}
$resul=mysqli_query($conexion,$sql);










if($resul=1){
    echo 1;
}
else{
    echo 0;
}
?>