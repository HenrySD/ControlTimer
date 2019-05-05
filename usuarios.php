<?php

require("partials/cabeza.php");
require("database.php");
$conexion=conexion();
$sqlEmpresa="SELECT Cod_Empr,Nom_Empr FROM tab_empr";
$sqlTurno="SELECT Cod_Turn,Des_Turn FROM tab_turn";
$resultadoEmpresa=mysqli_query($conexion,$sqlEmpresa);
$resultadoTurno=mysqli_query($conexion,$sqlTurno);


?>
<!--Aca Todo lo del lado derecho body-->
<<<<<<< HEAD
<div class="container ">
<h3 class="text-center">Usuarios</h3>
<button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i> Agregar </button>
<div id="vicki" class="">
=======


<div class="container">

    <h3 class="text-center">Usuarios</h3>
    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i> Agregar
    </button>
    <div id="vicki" class="">
>>>>>>> 42d3e4c5f669d032da3e241aa1472f8a512d059b


    </div>
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
                <form class="caj" id="frmnuevoUsua">
                    <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Código</label>
                            <input type="text" class="form-control" id="Cod_Usua" name="Cod_Usua">
                        </div>
                        <div class="form-group col-xl-7">
                            <label>Empresa</label>

                            <select name="Cod_Empr" id="Cod_Empr" class="form-control">
                                <?php 
                            while($mostrar=mysqli_fetch_row($resultadoEmpresa)){
                            ?>
                                <option value="<?php echo $mostrar[0]?>"><?php echo$mostrar[1]?></option>

                                <?php 
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Turno</label>
                            <select class="form-control" id="Cod_Turn" name="Cod_Turn">
                                <?php 
                            while($mostrarTurno=mysqli_fetch_row($resultadoTurno)){
                            ?>
                                <option value="<?php echo $mostrarTurno[0]?>"><?php echo $mostrarTurno[1]?></option>
                                <?php 
                             }
                            ?>
                            </select>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Tipo de Usuario</label>

                            <select class="form-control" name='Tip_Usua' id='Tip_Usua'>
                                <option value="Empleado">Empleado</option>
                                <option value="Administrador">Administrador</option>

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
                            <input type="text" class="form-control" id="Tel_Usua" name="Tel_Usua">
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Usuario</label>

                            <input type="text" class="form-control" id="Use_Name" name="Use_Name" value=" " disabled>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Contraseña</label>
                            <input type="text" class="form-control" id="Con_Usua" name="Con_Usua" value=" " disabled>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer col-xl-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnguardarnuevoUsua">Guardar</button>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#btnguardarnuevoUsua').click(function() {
            datosUsuarios = $('#frmnuevoUsua').serialize();
            $.ajax({
                type: "POST",
                data: datosUsuarios,
                url: "crud/agregarUsuario.php",
                success: function(r) {
                    if (r == 1) {
                        $('#frmnuevoUsua')[0].reset();
                        //3 para cambiar
                        $('#cajita').load('tablas/tablaUsuarios.php');
                        alertify.success("Usuario agregado conexito");
                    } else {
                        alertify.error("No se inserto un usuario");
                    }
                }
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#vicki').load('tablas/tablaUsuarios.php');
    });
    </script>
    <script>
    $(function() {
        $("#Tip_Usua").change(function() {
            if ($(this).val() === "Empleado") {
                $("#Use_Name").prop("disabled", true);
                $("#Con_Usua").prop("disabled", true);
                $("#Rep_Cont").prop("disabled", true);
            } else {
                $("#Use_Name").prop("disabled", false);
                $("#Con_Usua").prop("disabled", false);
                $("#Rep_Cont").prop("disabled", false);
            }
        });
    });
    </script>
    <?php
require('partials/pies.php');

?>