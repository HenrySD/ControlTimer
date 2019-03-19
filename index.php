<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--CDN boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="carpetas/css/estilo.css">




</head>

<body>


    <form action="singup.php" method="post" class="login text-center ">
        <div class="form-group ">
                <h5>Usuario</h5>
            <input class="form-control"type="text"placeholder="Correo" required="">
        </div>
        <div class="form-group">
                <h5>Contraseña</h5>
            <input class="form-control  " type="password" placeholder="Contrasena" required="">
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary btn-block" id="ingresar">Ingresar</button>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-danger btn-block" id="ingresar">Registrar</button>
            </div>
        </div>
    </form>
</body>





<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
</script>


</html>