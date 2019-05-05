<?php
require("partials/cabeza.php");
?>
<style>
small{
    color:#e10000;
}
</style>

<div class="container">
<h3 class="text-center mb-3">Configuración</h3>

<button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i>
        Agregar</button>
       
    <div id="box" class="m-0 p-0">
        <!--aqui aparece la tabla de la empresa-->

    </div>
</div>
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
                            <input type="text" class="form-control" id="Cod_Empr" name="Cod_Empr" required>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Turno</label>

                            <select class="form-control" name='Tip_Usua' id='Tip_Usua'>
                                <option value="Despertino">Despertino</option>
                                <option value="Matutino">Matutino</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Hora entrada</label>
                            <input type="time" class="form-control" id="Fec_Cons" name="Fec_Cons"required>

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Hora salida</label>
                            <input type="time" class="form-control " id="Tel_Empr" name="Tel_Empr"required>

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Limite de tiempo</label>
                            <input type="time" class="form-control " id="Ema_Empr" name="Ema_Empr"required>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer col-xl-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               
    <input type="submit" class="btn btn-primary" id="btnguardarnuevo" disabled="disabled" value="Guardar">
            </div>
        </div>
    </div>
</div>

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
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Turno</label>

                            <select class="form-control" name='Tip_Usua' id='Tip_Usua'>
                                <option value="Despertino">Despertino</option>
                                <option value="Matutino">Matutino</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Hora entrada</label>
                            <input type="time" class="form-control" id="Fec_Cons" name="Fec_Cons"required>

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Hora salida</label>
                            <input type="time" class="form-control " id="Tel_Empr" name="Tel_Empr"required>

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Limite de tiempo</label>
                            <input type="time" class="form-control " id="Ema_Empr" name="Ema_Empr"required>

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
<?php
require("partials/pies.php");
?>
