<?php
require("../database.php");
require("crud.php");

$obj=new crud();
$datos=array(
    $_POST['Cod_EmprU'],
    $_POST['Nom_EmprU'],
    $_POST['Fec_ConsU'],
    $_POST['Dir_EmprU'],
    $_POST['Ema_EmprU'],
    $_POST['Tel_EmprU']
);
echo $obj->actualizar($datos);




?>