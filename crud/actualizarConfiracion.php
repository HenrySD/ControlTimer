<?php
require("../database.php");
require("crud.php");

$obj=new crud();
$datos=array(
    $_POST['Cod_Turn'],
    $_POST['Des_Turn'],
    $_POST['Hor_Entr'],
    $_POST['Hor_Sali'],
    $_POST['Lim_Tiem']
    
);
echo $obj->actualizarConfiguracion($datos);




?>