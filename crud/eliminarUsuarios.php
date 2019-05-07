<?php
require('../database.php');
require("crud.php");

$obj=new crud();

echo $obj->eliminarUsuarios($_POST['Cod_Usua']);

?>