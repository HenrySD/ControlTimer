<?php
require("partials/cabeza.php");
require("database.php");
$conexion=conexion();
?>
<div class="container text-center ">
    <div class="row">
        <div class="col-sm-11">
            <h3 class="text-center mb-4">Reportes asistencia</h3>
        </div>
        <div class="col-sm-1">
            <a><i class="ti-help-alt" style="font-size:25px; margin-left:30px;" data-toggle="modal"
                    data-target=".bd-example-modal-lg"></i></a>
        </div>
    </div>

    <form id="form1">
        <div class="row">
            <div class="col-sm-2">
                <label>Fecha inicio</label>
                <input type="text" class="form-control" id="FechaInicio" name="FechaInicio">
            </div>
            <div class="col-sm-2">
                <label>Fecha Final</label>
                <input type="text" class="form-control" id="FechaFinal" name="FechaFinal">
            </div>
            <div class="col-sm-2">
                <label>Empleado</label>
                <input type="text" class="form-control" id="IdEmpleado" name="IdEmpleado">

            </div>
            <div class="col-sm-2 mt-4">
                <button class="btn btn-danger rounded-lg" id="btnBuscar">Buscar</button>
            </div>
            <div class="col-sm-2 mt-4">
                <button class="btn btn-primary">Generar Reporte</button>
            </div>
        </div>
    </form>
    <div id="tabla"></div>
</div>
<!-- este es el modal de ayuda-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#FechaInicio').on('change',function(){
        var desde=$('#FechaInicio').val();
        var hasta=$('#FechaFinal').val();
        var em=$('#IdEmpleado').val();
        
        var url='tablas/tablaReportes.php';
        $.ajax({
            type:'POST',
            url:url,
            data: 'desde='+desde+'&hasta='+hasta+'&em='+em,
            success: function(r){
                $('#tabla').load('tablas/tablaReportes.php');
            }
        });
        return false;
    });
});
</script>
<script>
$('#tabla').load('tablas/tablaReportes.php');
</script>
<?php
require("partials/pies.php");
?>