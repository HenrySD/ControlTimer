<?php
session_start();
require('database.php');
$conexcion = conexion();
//recordar cambiar el post de las variables
$usuario=$_POST['usuario'];
$pass=$_POST['password'];

$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'";
$resultado=mysqli_query($conexcion,$sql);

if(mysqli_num_rows($resultado)>0){
$_SESSION['sessionUsuario']=$usuario;
echo 1;
}else{
echo 2;
}








?>