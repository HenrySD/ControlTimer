<?php
require('../database.php');
require("crud.php");

$obj=new crud();





echo json_encode($obj->obtenDatosUsuarios($_POST['Cod_Usua']));

?>