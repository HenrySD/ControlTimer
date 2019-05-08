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


<div class="">

    <h3 class="text-center">Usuarios</h3>
    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"><i class="ti-plus"></i> Agregar
    </button>
    <div id="vicki" class="">


    </div>
</div>
</div>
<!-- Este es el modal para agregar nuevos usuarios-->
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

                            <input type="text" class="form-control" id="Use_Name" name="Use_Name" null disabled>
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Contraseña</label>
                            <input type="text" class="form-control" id="Con_Usua" name="Con_Usua" null disabled>
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
</div>
    		<!--este modal es para la edicion de campos de usuarios-->
<div class="modal fade col-xl-12" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-xl-12">
            <div class="modal-header col-xl-12">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body col-xl-12">
                <form class="caj" id="frmnuevoU">
                <div class="form-row">
                        <div class="form-group col-xl-6">
                            <label>Código</label>
                            <input type="text" class="form-control" id="Cod_UsuaU" name="Cod_UsuaU" disabled>
                        </div>
                        <div class="form-group col-xl-7">
                            <label>Empresa</label>

                            <select name="Cod_EmprU" id="Cod_EmprU" class="form-control">
                                <?php 
                            while($mostrarU=mysqli_fetch_row($resultadoEmpresa)){
                            ?>
                                <option value="<?php echo $mostrarU[0]?>"><?php echo $mostrarU[1]?></option>

                                <?php 
                            }
                            ?>
                            </select>
                            
                            
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Turno</label>
                            <select class="form-control" id="Cod_TurnU" name="Cod_TurnU">
                                <?php 
                            while($mostrarTurnoU=mysqli_fetch_row($resultadoTurno)){
                            ?>
                                <option value="<?php echo $mostrarTurnoU[0]?>"><?php echo $mostrarTurnoU[1]?></option>
                                <?php 
                             }
                            ?>
                            </select>
                                
                            
                        </div>
                        <div class="form-group col-xl-12">
                            <label>Tipo de Usuario</label>

                            <select class="form-control" name='Tip_UsuaU' id='Tip_UsuaU'>
                                <option value="Empleado">Empleado</option>
                                <option value="Administrador">Administrador</option>

                            </select>
                        </div>
                        <div class="form-group col-xl-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="Nom_UsuaU" name="Nom_UsuaU">

                        </div>
                        <div class="form-group col-xl-6">
                            <label>Apellido</label>
                            <input type="text" class="form-control " id="Ape_UsuaU" name="Ape_UsuaU">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Dirección</label>
                            <input type="text" class="form-control " id="Dir_UsuaU" name="Dir_UsuaU">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Correo</label>
                            <input type="text" class="form-control" id="Ema_UsuaU" name="Ema_UsuaU">

                        </div>
                        <div class="form-group col-xl-12">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" id="Tel_UsuaU" name="Tel_UsuaU">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer col-xl-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning" id="btneditarUsuario">Actualizar</button>

            </div>
        </div>
    </div>
</div>
<script>
 function agregaFrmActualizar(Cod_Usua) {
    $.ajax({

        type: "POST",
        data: "Cod_Usua=" + Cod_Usua,
        url: "crud/obtenDatosUsuarios.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#frmnuevoU')[0].reset();
            $('#Cod_UsuaU').val(datos['Cod_Usua']);
            $('#Cod_EmprU').val(datos['Cod_Empr']);
            $('#Cod_TurnU').val(datos['Cod_Turn']);
            $('#Tip_UsuaU').val(datos['Tip_Usua']);
            $('#Nom_UsuaU').val(datos['Nom_Usua']);
            $('#Ape_UsuaU').val(datos['Ape_Usua']);
            $('#Dir_UsuaU').val(datos['Dir_Usua']);
            $('#Ema_UsuaU').val(datos['Ema_Usua']);
            $('#Tel_UsuaU').val(datos['Tel_Usua']);
            
        }
    });
}
</script>
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
                        $('#vicki').load('tablas/tablaUsuarios.php');
                        alertify.success("Administrador ingresado");
                    }
                     else {
                        $('#frmnuevoUsua')[0].reset();
                        $('#vicki').load('tablas/tablaUsuarios.php');
                        alertify.success("Empleado ingresado");
                    } 
                    
                }
            });
        });

        $('#btneditarUsuario').click(function() {
        datos = $('#frmnuevoU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "crud",
            success: function(r) {
                if (r == 1) {

                    $('#cajita').load('tablas/tablaUsuarios.php');
                    alertify.success("Actualizado Conexito");
                } else {
                    alertify.error("Fallo la Actualizacion");
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
    <script>
   
    function eliminarDatos(Cod_Usua) {
    alertify.confirm('Eliminar', '¿Seguro que desea eliminar este usuario?', function() {
        $.ajax({

            type: "POST",
            data: "Cod_Usua=" + Cod_Usua,
            url: "crud/eliminarUsuarios.php",
            success: function(r) {
                if(r==1){
                    $('#vicki').load('tablas/tablaUsuarios.php');
                    alertify.success("Usuario eliminado con exito");
                }else{
                    alertify.error("No se pudo eliminar");
                }

            }
        });

    }
    ,function(){

    });

}
    </script>
    <?php
require('partials/pies.php');

?>