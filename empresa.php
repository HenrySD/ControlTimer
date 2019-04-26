<?php

require("partials/cabeza.php");


?>
<!--Aca Todo lo del lado derecho body-->


<div class="container ">

    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i> Agregar
        Empresa</button>
    <div id="cajita" class="m-0 p-0">


    </div>
</div>
<!-- Este es el modal para guardar empresa-->
<div class="modal fade col-xl-12" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-xl-12">
            <div class="modal-header col-xl-12">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar nueva Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-xl-12">
                <form class="caj" id="frmnuevo">
                    <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Código</label>
                            <input type="text" class="form-control" id="Cod_Empr" name="Cod_Empr">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="Nom_Empr" name="Nom_Empr">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Fecha</label>
                            <input type="text" class="form-control" id="Fec_Cons" name="Fec_Cons">

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Teléfono</label>
                            <input type="text" class="form-control " id="Tel_Empr" name="Tel_Empr">

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Correo</label>
                            <input type="text" class="form-control " id="Ema_Empr" name="Ema_Empr">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Dirección</label>
                            <input type="text" class="form-control" id="Dir_Empr" name="Dir_Empr">

                        </div>

                    </div>


                </form>
            </div>
            <div class="modal-footer col-xl-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnguardarnuevo">Guardar</button>

            </div>
        </div>
    </div>
</div>
<!--Este es el modal para editar-->
<div class="modal fade col-xl-12" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-xl-12">
            <div class="modal-header col-xl-12">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-xl-12">
                <form class="caj" id="frmnuevoU">
                    <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Código</label>
                            <input type="text" class="form-control" readonly id="Cod_EmprU" name="Cod_EmprU">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" id="Nom_EmprU" name="Nom_EmprU">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Fecha</label>
                            <input type="text" class="form-control input-sm" id="Fec_ConsU" name="Fec_ConsU">

                        </div>
                        <div class="form-group col-xl-4">
                            <label>Teléfono</label>
                            <input type="text" class="form-control input-sm" id="Tel_EmprU" name="Tel_EmprU">

                        </div>
                        <div class="form-group col-xl-8">
                            <label>Correo</label>
                            <input type="text" class="form-control input-sm " id="Ema_EmprU" name="Ema_EmprU">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Dirección</label>
                            <input type="text" class="form-control input-xs" id="Dir_EmprU" name="Dir_EmprU">
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
    $('#btnguardarnuevo').click(function() {
        datos = $('#frmnuevo').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "agregar.php",
            success: function(r) {
                if (r == 1) {
                    $('#frmnuevo')[0].reset();
                    $('#cajita').load('tablas.php');
                    alertify.success("Agregado Conexito");
                } else {
                    alertify.error("Fallo al agregar");
                }
            }
        });
    });

    $('#btneditar').click(function() {
        datos = $('#frmnuevoU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "actualizar.php",
            success: function(r) {
                if (r == 1) {

                    $('#cajita').load('tablas.php');
                    alertify.success("Actualizado Conexito");
                } else {
                    alertify.error("Fallo la Actualizacion");
                }
            }
        });
    });
});
</script>
<script type="text/javascript">
function agregaFrmActualizar(Cod_Empr) {
    $.ajax({

        type: "POST",
        data: "Cod_Empr=" + Cod_Empr,
        url: "obtenDatos.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#frmnuevoU')[0].reset();
            $('#Cod_EmprU').val(datos['Cod_Empr']);
            $('#Nom_EmprU').val(datos['Nom_Empr']);
            $('#Fec_ConsU').val(datos['Fec_Cons']);
            $('#Tel_EmprU').val(datos['Tel_Empr']);
            $('#Dir_EmprU').val(datos['Dir_Empr']);
            $('#Ema_EmprU').val(datos['Ema_Empr']);

        }
    });

    function eliminarDatos(Cod_EmprU) {
        alertify.confirm('Eliminar Empresa', '¿Seguro de eliminar esta Empresa :(?', function() {

            $.ajax({
                type: "POST",
                data: "Cod_EmprU=" + Cod_EmprU,
                url: "eliminar.php",
                success: function(r) {
                    if (r == 1) {
                        $('#example').load('tablas.php');
                        alertify.success("Eliminado con exito !");
                    } else {
                        alertify.error("No se pudo eliminar...");
                    }
                }
            });

        }, function() {

        });
    }



}
</script>




<script>
$("#Fec_Cons").datepicker({
    minDate: new Date(2019, 0, 1),
    dateFormat: "yy-mm-dd"

});


$("#Fec_ConsU").datepicker({
    minDate: new Date(2019, 0, 1),
    dateFormat: "yy-mm-dd"
});
</script>
<script>
$(document).ready(function() {
    $('#cajita').load('tablas.php');
});
</script>
<script>
bootstrapValidate('#Cod_Empr',
        'required:Rellene el campo|min:5:|regex:^[0-9]+$:Solo numeros|max:15:Maximo 15 Caracteres'),
    bootstrapValidate('#Nom_Empr', 'required:Rellene el campo|min:5:Ingrese 5 caracteres'),
    bootstrapValidate('#Fec_Cons', 'ISO8601:Utilise el Formato YYYY-MM-DD'),
    bootstrapValidate('#Tel_Empr',
        'required:Rellene el campo|min:8:8 caracteres Minimo|max:9:9 Caracteres Maximo|regex:^[0-9]+$:Solo numeros'),
    bootstrapValidate('#Ema_Empr', 'email:Ingrese un Email valido'),
    bootstrapValidate('#Dir_Empr', 'required:Rellene el campo|min:5:Ingrese 5 caracteres');
</script>


<?php
require('partials/pies.php');

?>