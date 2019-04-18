<?php

require("partials/cabeza.php");


?>
<!--Aca Todo lo del lado derecho body-->


<div class="container ">
    <h3 class="text-center m-3">Tabla Empresa</h3>
    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i> Agregar Empresa</button>

    <div id="cajita" class="container box" >


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
                <form class="caj">
                    <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Codigo</label>
                            <input type="text" class="form-control" id="Cod_Empr">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="Nom_Empr">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Fecha</label>
                            <input type="date" class="form-control" id="Fec_Cons">

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Telefono</label>
                            <input type="text" class="form-control " id="Tel_Empr">

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Correo</label>
                            <input type="text" class="form-control " id="Ema_Empr">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Direccion</label>
                            <input type="text" class="form-control" id="Dir_Empr">

                        </div>

                    </div>


                </form>
            </div>
            <div class="modal-footer col-xl-12">

                <button type="button" class="btn btn-primary" id="guardarnuevo">Guardar</button>
            </div>
        </div>
    </div>
</div>
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