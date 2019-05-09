<?php
require("../database.php");
require("crud.php");

$obj=new crud();
$datosEdiUsua=array(
    $_POST['Cod_UsuaU'],
    $_POST['NCod_EmprU'],
    $_POST['NCod_TurnU'],
    $_POST['Tip_UsuaU'],
    $_POST['Nom_UsuaU'],
    $_POST['Ape_UsuaU'],
    $_POST['Dir_UsuaU'],
    $_POST['Ema_UsuaU'],
    $_POST['Tel_UsuaU']
);
echo $obj->actualizarUsuarios($datosEdiUsua);

?>