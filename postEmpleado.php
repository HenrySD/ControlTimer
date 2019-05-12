<?php
$datos=$_POST['txt'];
require('database.php');
$conexion=conexion();
$sql="INSERT INTO tab_asis (Cod_Usua,Reg_Entr,Reg_Salida,Fec_Regi) VALUES ('$datos','','','2019-05-05')";

$resul=mysqli_query($conexion,$sql);

if($resul=1){
    echo 1;
}
else{
    echo 0;
}
?>