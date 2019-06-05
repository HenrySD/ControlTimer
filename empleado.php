<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Empleado</title>

    <!--//////////////////////////////-->
    <!--CDN bootstrap y css-->
    <!--//////////////////////////////-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="carpetas/css/estilo.css">
    <link rel="stylesheet" href="alertify/css/themes/default.css">
    <link rel="stylesheet" href="alertify/css/alertify.css">
    <link rel="stylesheet" href="carpetas/css/estiloR.css">

    <!--**********************CDN de jQuery y js*******************************-->
    <script src="carpetas/js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
                <div class="card-body" >
                    <div class="row">
                        <div class="col-md-12 border text-center">
                            <div class="wrap">
                                <div class="widget">
                                    <div class="fechareloj">
                                        <p id="diaSemana" class="diaSemana"></p>
                                        <p id="dia" class="dia"></p>
                                        <p>de</p>
                                        <p id="mes" class="mes"></p>
                                        <p>del</p>
                                        <p id="year" class="year"></p>
                                    </div>
                                    <!----------------------------------------->
                                    <p id="hora" class="hora"></p>
                                    <p>:</p>
                                    <p id="minutos" class="minutos"></p>
                                    <p>:</p>
                                    <p id="segundos" class="segundos"></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-3">
                        <form id="formulario">
                            <div class="" style="">
                                <input type="text" id="txt" name="txt" class="form-control" value="" readonly hidden>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <video id="preview" class="col-md-4 border ml-2 mt-3 " style="width:100px; height:200px;">

                    </video>

                    <div id="muestra" class="col-md-7 " style="width:100px; height:250px;">

                    </div>
                </div>

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
    alertify.success("Registrado !");
    document.getElementById('txt').value = content;
    datos = $('#formulario').serialize();
    $.ajax({

        type: "POST",
        data: datos,
        url: "postEmpleado.php",
        success: function(r) {
            if (r == 1) {
                $('#muestra').load('tablas/tablaMuestra.php');

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

<script src="js/main.js"></script>
<script>
var actualizarHora = function(){
    
    var fecha = new Date(),
        horas = fecha.getHours(),
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaDeSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        anio = fecha.getFullYear();

        var NombreDeSemana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
        var NombreDeMes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'];

            var pHoras = document.getElementById("hora"),
            pMinutos = document.getElementById("minutos"),
            pSegundos = document.getElementById("segundos"),
            pDiaDeSemana = document.getElementById("diaSemana"),
            pDia = document.getElementById("dia"),
            pMes = document.getElementById("mes"),
            pAnio = document.getElementById("year");
    if(minutos < 10){
        minutos = "0" + minutos;
    }
    if(segundos < 10){
            segundos = "0" + segundos;
    }
        pHoras.textContent = horas,
        pMinutos.textContent = minutos,
        pSegundos.textContent = segundos,  
        pDiaDeSemana.textContent = NombreDeSemana[diaDeSemana],
        pDia.textContent = dia,
        pMes.textContent = NombreDeMes[mes],
        pAnio.textContent = anio;  
}

actualizarHora();
setInterval(actualizarHora,1000);
</script>



</html>