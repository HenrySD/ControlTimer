<?php 
require("../database.php");
require("crud.php");

$objUsuarios = new crud();
$datosUsuarios=array(
    $_POST['Cod_Usua'],
    $_POST['Cod_Empr'],
    $_POST['Cod_Turn'],
    $_POST['Tip_Usua'],
    $_POST['Nom_Usua'],
    $_POST['Ape_Usua'],
    $_POST['Dir_Usua'],
    $_POST['Ema_Usua'],
    $_POST['Tel_Usua'],
    $_POST['Use_Name'],
    $_POST['Con_Usua']
);
echo $objUsuarios->agregarUsuarios($datosUsuarios);
?>