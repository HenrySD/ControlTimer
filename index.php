<?php
session_start();
require("database.php");
$conexion=conexion();
if(isset($_POST['txtUsuario']) && isset($_POST['txtPass']) ){
    $user = $_POST['txtUsuario'];
    $pass =sha1($_POST['txtPass']);
    $sql="SELECT * FROM tab_usua";
$resultado = $conexion->query($sql);
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
       if($user== $row['Use_Name'] && $pass== $row['Con_Usua'] ){
    header('Location:singup.php');
            $_SESSION['usu']=$user;
           break; 
       }
       else{
        $_POST['no']=1;
        echo "<script>\n";
        echo "no='".$_POST['no']."'\n";
        echo "</script>\n";
          
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
        <div class="">
            <img class="mb-3" src="carpetas/img/logo.jpg">
        </div>
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
                alertify.alert('Alerta', 'Ingresa un usuario');
                return false;
            } else if ($('#txtPass').val() == "") {
                alertify.alert('Alerta', 'Ingresa una contraseña');
                return false;
                
            }
    });
    if(no==1){
        alertify.alert('Alerta', 'Usuario no registrado');
        return false;
        
                
    }
    
});
</script>

</html>