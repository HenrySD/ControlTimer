<?php

require("partials/cabeza.php");


?>
<!--Aca Todo lo del lado derecho body-->
<div class="container text-center">
 
    <div class="card ">
        <div class="card-header text-center">Registrar nuevo Usuario</div>
        <div class="card-body text-center" >
            <form action="">
                <div class="row form-group ">
                    <div class="col-sm-4">
                        <label for="codigo_usuario" class="col-form-label col-md-6">Código usuario</label>
                    </div> 
                    <div class="col-md-2">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="codigo_empresa" class="col-form-label col-md-6">Código empresa</label>
                    </div>
                    <div class="col-md-2">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="tipo_usuario" class="col-form-label col-md-6">Tipo de Usuario</label>
                    </div>
                    <div class="col-md-7">
                            <select class="form-control" id="tipo_usuario">
                                <option value="administrador">Administrador</option>
                                <option value="empleado">Empleado</option>
                            </select>
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="nombres_usuario" class="col-form-label col-md-6">Nombre</label>
                    </div>
                    <div class="col-md-7">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="apellidos_usuario" class="col-form-label col-md-6">Apellido</label>
                    </div>
                    <div class="col-md-7">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="direccion_usuario" class="col-form-label col-md-6">Dirección</label>
                    </div>
                    <div class="col-md-7">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="correo_usuario" class="col-form-label col-md-8">Correo electrónico</label>
                    </div>
                    <div class="col-md-7">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="telefono_usuario" class="col-form-label col-md-8">Teléfono</label>
                    </div>
                    <div class="col-md-7">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="dia_entrada" class="col-form-label col-md-6">Día entrada</label>
                    </div>
                    <div class="col-md-7">
                            <input type="date" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="hora_entrada" class="col-form-label col-md-8">Hora de entrada</label>
                    </div>
                    <div class="col-md-2">
                            <input type="time" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="hora_salida" class="col-form-label col-md-8">Hora de salida</label>
                    </div>
                    <div class="col-md-2">
                            <input type="time" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="nombre_usuario" class="col-form-label col-md-4">Usuario</label>
                    </div>
                    <div class="col-md-7">
                            <input type="text" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="contra_usuario" class="col-form-label col-md-6">Contraseña</label>
                    </div>
                    <div class="col-md-7">
                            <input type="password" class="form-control">
                        </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label for="repe_contrasena" class="col-form-label col-md-8">Repetir contraseña</label>
                    </div>
                    <div class="col-md-7">
                            <input type="password" class="form-control">
                        </div>
                </div>
            </form>

        </div>
    </div>



    <button class="btn btn-primary mb-5">Agregar usuario</button>
</div>

</div>

</div>


<?php
require('partials/pies.php');

?>