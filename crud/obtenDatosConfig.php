<?php
require('../database.php');
require("crud.php");

$obj=new crud();
echo json_encode($obj->obtenDatosConfig($_POST['Cod_Turn']));

?>