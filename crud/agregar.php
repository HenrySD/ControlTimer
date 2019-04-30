<?php
require("../database.php");
require("crud.php");

$obj=new crud();
$datos=array(
    $_POST['Cod_Empr'],
    $_POST['Nom_Empr'],
    $_POST['Fec_Cons'],
    $_POST['Tel_Empr'],
    $_POST['Dir_Empr'],
    $_POST['Ema_Empr']
);
echo $obj->agregar($datos);




?>