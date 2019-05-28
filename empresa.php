<?php

require("partials/cabeza.php");


?>
<!--Aca Todo lo del lado derecho body-->

<style>
small {
    color: #e10000;
}
</style>

<!-- este es el modal de ayuda-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item"
                    src="https://www.youtube.com/embed/LIR5Sli8cmc?autoplay=1&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0&vq=hd720&origin"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row">
        <div class="col-sm-11">
            <h3 class="text-center">Empresa</h3>
        </div>
        <div class="col-sm-1">
            <a><i class="ti-help-alt" style="font-size:25px; margin-left:30px;" data-toggle="modal"
                    data-target=".bd-example-modal-lg"></i></a>
        </div>
    </div>
    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i>Agregar</button>
    <div id="cajita" class="">
        <!--aqui aparece la tabla de la empresa-->
    </div>
</div>


<!-- Este es el modal para guardar empresa-->
<div class="modal fade col-xl-12" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-xl-12">
            <div class="modal-header col-xl-12">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-xl-12">
                <form class="caj" id="frmnuevo">
                    <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Código</label>
                            <input type="text" class="form-control" id="Cod_Empr" name="Cod_Empr"
                                data-validation="number">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="Nom_Empr" name="Nom_Empr">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Fecha</label>
                            <input type="text" class="form-control" id="Fec_Cons" name="Fec_Cons" data-validation="date"
                                data-validation-format="yyyy-mm-dd">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Teléfono</label>
                            <input type="text" class="form-control " id="Tel_Empr" name="Tel_Empr" max="8">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Correo</label>
                            <input type="text" class="form-control " id="Ema_Empr" name="Ema_Empr"
                                data-validation="email" data-validation-depends-on="do-contact">

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
                <input type="submit" class="btn btn-primary" id="btnguardarnuevo" value="Guardar">
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
                            <input type="text" class="form-control" readonly id="Cod_EmprU" name="Cod_EmprU"
                                data-validation="number">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" id="Nom_EmprU" name="Nom_EmprU">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Fecha</label>
                            <input type="text" class="form-control input-sm" id="Fec_ConsU" name="Fec_ConsU"
                                data-validation="date" data-validation-format="yyyy-mm-dd">

                        </div>
                        <div class="form-group col-xl-4">
                            <label>Teléfono</label>
                            <input type="text" class="form-control input-sm" id="Tel_EmprU" name="Tel_EmprU"
                                data-validation="number">

                        </div>
                        <div class="form-group col-xl-8">
                            <label>Correo</label>
                            <input type="text" class="form-control input-sm " id="Ema_EmprU" name="Ema_EmprU"
                                data-validation="email" data-validation-depends-on="do-contact">
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
        if (document.getElementById('Cod_Empr').value.trim() == '') {
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("Ingrese un código");
        } else if (document.getElementById('Nom_Empr').value.trim() == '') {
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("Ingrese un nombre");
        } else if (document.getElementById('Fec_Cons').value.trim() == '') {
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("Ingrese una fecha");
        } else if (document.getElementById('Tel_Empr').value.trim() == '') {
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("Ingrese un teléfono");
        } else if ($("#Tel_Empr").val().length > 8 || isNaN($("#Tel_Empr").val())) {
            alert("El teléfono debe tener más de 8 caracteres y solo números");
            return false;
        } else if (document.getElementById('Ema_Empr').value.trim() == '') {
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("Ingrese un correo");
        } else if (document.getElementById('Dir_Empr').value.trim() == '') {
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("Ingrese un dirección");
        } else {
            datos = $('#frmnuevo').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "crud/agregar.php",
                success: function(r) {
                    if (r == 1) {
                        $('#frmnuevo')[0].reset();
                        //3 para cambiar
                        $('#cajita').load('tablas/tablaEmpresa.php');
                        alertify.success("Agregado Conexito");
                    } else {
                        alertify.error("Fallo al agregar");
                    }
                }
            });
        }
    });

    $('#btneditar').click(function() {
        datos = $('#frmnuevoU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "crud/actualizar.php",
            success: function(r) {
                if (r == 1) {
                    $('#cajita').load('tablas/tablaEmpresa.php');
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
        url: "crud/obtenDatos.php",
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
}

function eliminarDatos(Cod_Empr) {
    alertify.confirm('Eliminar', '¿Seguro desea eliminarla?', function() {
        $.ajax({

            type: "POST",
            data: "Cod_Empr=" + Cod_Empr,
            url: "crud/eliminar.php",
            success: function(r) {
                if (r == 1) {
                    $('#cajita').load('tablas/tablaEmpresa.php');
                    alertify.success("Eliminado con exito");
                } else {
                    alertify.error("No se pudo eliminar");
                }

            }
        });

    }, function() {

    });

}
</script>
<script>
$("#Fec_Cons").datepicker({
    // Siquiere colocar fechas futuras usar minDate()
    // Si quiere usar fechas pasadas usar maxDate()
    maxDate: new Date(),
    dateFormat: "yy-mm-dd"

});
$("#Fec_ConsU").datepicker({
    maxDate: new Date(),
    dateFormat: "yy-mm-dd"
});
</script>
<script>
$(document).ready(function() {
    $('#cajita').load('tablas/tablaEmpresa.php');
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
$.validate({
    lang: 'es'
});
</script>
<?php
require('partials/pies.php');

?>