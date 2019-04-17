<?php
require("database.php");
$conexion = conexion();

$c=$_POST['cod_Empr'];
$n=$_POST['nom_Empr'];
$f=$_POST['fec_Cons'];
$d=$_POST['dir_Empr'];
$t=$_POST['tel_Empr'];

$sql="INSERT into tab_empr (cod_Empr,nom_Empr,fec_Cons,dir_Empr,tel_Empr) 
                    values (   '$c'      ,'$n',    '$f',    '$d',    '$t')";

echo $result=mysqli_query($conexion,$sql);
?>