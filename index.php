<?php
session_start();
require("database.php");
if(isset($_POST['txtUsuario']) && isset($_POST['txtPass']) ){
    $user = $_POST['txtUsuario'];
    $pass =$_POST['txtPass'];
    $sql="SELECT * FROM usuarios";
$resultado = $conexion->query($sql);
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
       if($user== $row['usuario'] && $pass== $row['pass'] ){
    header('Location:singup.php');
            $_SESSION['usu']=$user;
           break; 
       }
       else{
        echo "ninguno coinside ";
           $valido="no"; 
           
       }  
}
}
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Session</title>

    		<!--***************CDN bootstrap***************************-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="carpetas/css/estilo.css">
    <!--********************Archivos de alertas**************************-->
    <link rel="stylesheet" href="alertify/css/themes/default.css">
    <link rel="stylesheet" href="alertify/css/alertify.css">


</head>

<body>


    <form action="index.php" method="POST" class="login text-center ">
        <div class="form-group ">
            <h5>Usuario</h5>
            <input class="form-control" id="txtUsuario" type="text" placeholder="" name="txtUsuario">
        </div>
        <div class="form-group">
            <h5>Contraseña</h5>
            <input class="form-control  " id="txtPass" type="password" placeholder="" name="txtPass">
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" id="entrarSistema" class="btn btn-primary btn-block" value="Ingresar">
            
    </form>
</body>




<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="alertify/alertify.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#entrarSistema').click(function() {
        if ($('#txtUsuario').val() == "") {
            alertify.alert('Alerta', 'Ingresa un Usuario');
            return false;
        } else if ($('#txtPass').val() == "") {
            alertify.alert('Alerta', 'Ingresa una contra');
            return false;
        }
    });
});


</script>

</html>