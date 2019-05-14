<?php
require("partials/cabeza.php");
?>
<style>
small{
    color:#e10000;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>

<div class="container">
<h3 class="text-center mb-3">Configuración</h3>
    <div id="box">
        <!--aqui aparece la tabla de la empresa-->

    </div>
</div>

		<!--este es el modal de edicion de configuracion-->
<div class="modal fade col-xl-12" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-xl-12">
            <div class="modal-header col-xl-12">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar configuración</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-xl-12">
                <form class="caj" id="editConfig">
                    <div class="form-row">
                    <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Código</label>
                            <input type="text" class="form-control" id="Cod_Turn" name="Cod_Turn"readonly>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Turno</label>
                            <input class="form-control" name="Des_Turn" id="Des_Turn">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Hora entrada</label>
                            <div class="hola">
                            <input type="text" class="form-control" value=""  id="Hor_Entr" name="Hor_Entr">
                            </div>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Hora salida</label>
                            <div class="hola">
                            <input type="text" class="form-control" value="" id="Hor_Sali" name="Hor_Sali">
                            </div>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Limite de tiempo</label>
                            <div class="hola">
                            <input type="text" class="form-control " id="Lim_Tiem" name="Lim_Tiem"required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer col-xl-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning" id="btneditar">Actualizar</button>

            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    $('#box').load('tablas/tablaConfiguracion.php');
});
</script>
<script>
$('#btneditar').click(function() {
        datos = $('#editConfig').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "crud/actualizarConfiracion.php",
            success: function(r) {
                if (r == 1) {

                    $('#box').load('tablas/tablaConfiguracion.php');
                    alertify.success("Actualizado Conexito");
                } else {
                    $('#box').load('tablas/tablaConfiguracion.php');
                    alertify.error("Fallo la Actualizacion");
                }
            }
        });
    });

</script>
<script>
function agregaFrmActualizar(Cod_Turn) {
    $.ajax({

        type: "POST",
        data: "Cod_Turn=" + Cod_Turn,
        url: "crud/obtenDatosConfig.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#editConfig')[0].reset();
            $('#Cod_Turn').val(datos['Cod_Turn']);
            $('#Des_Turn').val(datos['Des_Turn']);
            $('#Hor_Entr').val(datos['Hor_Entr']);
            $('#Hor_Sali').val(datos['Hor_Sali']);
            $('#Lim_Tiem').val(datos['Lim_Tiem']);
            

        }
    });
}
</script>
<script>
$(document).ready(function() {
  $('.hola').timepicker({
    useCurrent: false,
    format: 'HH:mm:ss',
    minuteStep: 1,
    showSeconds: true,
    showMeridian: false,
    disableFocus: true,
    icons: {
      up: 'fa fa-chevron-up',
      down: 'fa fa-chevron-down'
    }
  }).on('focus', function() {
    $('.hola').timepicker('showWidget');
  });

});
</script>
<?php
require("partials/pies.php");
?>
