<?php
$datos=$_POST['txt'];
require('database.php');

$conexion=conexion();
date_default_timezone_set('America/El_Salvador');
$oraActual=date('H:i:s');
$fechaActual=date('y-m-d');
$sql="INSERT INTO tab_asis (Cod_Usua,Reg_Entr,Reg_Salida,Fec_Regi) VALUES ('$datos','$oraActual','','$fechaActual')";
$resul=mysqli_query($conexion,$sql);



if($resul=1){
    echo 1;
}
else{
    echo 0;
}
?>