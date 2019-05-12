<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Empleado</title>
<?php 
require("cnd.php")
?>
    <!--//////////////////////////////-->
    <!--CDN bootstrap y css-->
    <!--//////////////////////////////-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="carpetas/css/estilo.css">
    <link rel="stylesheet" href="alertify/css/themes/default.css">
    <link rel="stylesheet" href="alertify/css/alertify.css">

    <!--**********************CDN de jQuery y js*******************************-->
    <script src="carpetas/js/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
    </script>
    <script src="carpetas\js\instascan.min.js"></script>
    <script src="alertify/alertify.js"></script>
</head>

<body class="cuerpo-ve">

    <div class="contenedor-ve ">
        <div class="container">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 ">
                            <h5 class="text-center">Control de Asistencia</h5>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <img src="carpetas/img/logo.jpg" alt="">
                        </div>
                    </div>


                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 ml-2 border text-center">
                            <p>Lunes 22 de Abril del 2019 </p>
                        </div>
                        <div class="col-md-4 ml-3 border text-center">
                            <p> 10:34:40 PM </p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="row">
                        <video id="preview" class="col-md-4 border ml-2 mt-3 " style="width:100px; height:200px;">

                        </video>

                        <div id="muestra" class="col-md-7  ml-2 mt-3" style="width:100px; height:250px;">
                            
                        </div>
                    </div>
                    <form id="formulario">
                        <div class=" row col-sm-3 ml-2 mt-3" style="height:50px;">
                            <input type="text" id="txt" name="txt" class="form-control" value="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
$('#muestra').load('tablas/tablaMuestra.php');
</script>
<script type="text/javascript">
let scanner = new Instascan.Scanner({
    video: document.getElementById('preview')
});
scanner.addListener('scan', function(content) {
    console.log(content);
    alertify.success("Agregado con exito !");
    document.getElementById('txt').value = content;
    datos = $('#formulario').serialize();
    $.ajax({
        
        type: "POST",
        data: datos,
        url: "postEmpleado.php",
        success: function(r) {
            if (r == 1) {
                $('#muestra').load('tablas/tablaMuestra.php');
                alertify.success("introducido en la db");
            } else {
                alertify.success("El ID no esta registrado");
            }
        }
    });

});
Instascan.Camera.getCameras().then(function(cameras) {
    if (cameras.length > 0) {
        scanner.start(cameras[0]);

    } else {
        console.error('La camara no funciona.');
    }
}).catch(function(e) {
    console.error(e);
});

$()
</script>
</html>