<?php

require("partials/cabeza.php");
?>
<!--Aca Todo lo del lado derecho body-->



    <h3 class="text-center">Usuarios</h3>
    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i> Agregar Usuario</button>
    <div id="vicki" class="">


    </div>
</div>

<!-- Este es el modal para agregar usuarios-->
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
                            <input type="text" class="form-control" id="Cod_Usua" name="Cod_Usua">
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Empresa</label>
                            <input type="text" class="form-control" id="Cod_Empr" name="Cod_Empr">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Turno</label>
                            <select class="form-control" id="tipo_usuario">
                                <option value="administrador">Matutino</option>
                                <option value="empleado">Nocturno</option>
                            </select>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Tipo de Usuario</label>
                            <select class="form-control" id="tipo_usuario">
                                <option value="administrador">Administrador</option>
                                <option value="empleado">Empleado</option>
                            </select>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="Nom_Usua" name="Nom_Usua">

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Apellido</label>
                            <input type="text" class="form-control " id="Ape_Usua" name="Ape_Usua">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Dirección</label>
                            <input type="text" class="form-control " id="Dir_Usua" name="Dir_Usua">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Correo</label>
                            <input type="text" class="form-control" id="Ema_Usua" name="Ema_Usua">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" id="Dir_Empr" name="Tel_Usua">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Usuario</label>
                            <input type="text" class="form-control" id="Nom_Usur" name="Nom_Usur">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Contraseña</label>
                            <input type="text" class="form-control" id="Con_Usua" name="Con_Usua">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Repetir contraseña</label>
                            <input type="text" class="form-control" id="Rep_Cont" name="Rep_Cont">
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

<script>
$(document).ready(function() {
    $('#vicki').load('tablas/tablaUsuarios.php');
});
</script>
<?php
require('partials/pies.php');

?>