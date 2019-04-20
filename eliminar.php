<?php
require('database.php');
require("crud.php");

$obj=new crud();

echo $obj->eliminar($_POST['Cod_Empr']);

?>