<?php
require('database.php');
require("crud.php");

$obj=new crud();





echo json_encode($obj->obtenDatos($_POST['Cod_Empr']));

?>