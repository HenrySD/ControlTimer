<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Session</title>

    <!--CDN boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="carpetas/css/estilo.css">
    <!--********************Archivos de alertas**************************-->
    <link rel="stylesheet" href="alertify/css/themes/default.css">
    <link rel="stylesheet" href="alertify/css/alertify.css">


</head>

<body>


    <form action="index.php" method="post" class="login text-center ">
        <div class="form-group ">
            <h5>Usuario</h5>
            <input class="form-control" id="txtUsuario" type="text" placeholder="" name="usuario">
        </div>
        <div class="form-group">
            <h5>Contraseña</h5>
            <input class="form-control  " id="txtPass" type="password" placeholder="" name="pass">
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" id="entrarSistema" class="btn btn-primary btn-block" value="Ingresar">

            </div>

        </div>
    </form>
</body>





<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="alertify/alertify.js"></script>

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


        cadena = "usuario=" + $('#txtUsuario').val() +
            "&password="  +$('#txtPass').val();

        $.ajax({
            type: "POST",
            url: "login.php",
            data: cadena,
            success:function(r) {
                if(r==1){
                    window.location="singup.php";
                }
                else{
                    alertify.alert("fallo al entrar");
                }
            }

        });

    });
});
</script>

</html>