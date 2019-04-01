<?php

require("partials/cabeza.php");
?>
<!--Aca Todo lo del lado derecho-->
<div class="row">
    <div class="col-sm-12">
        <h5 class="text-center pb-3"> Empresa</h5>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#nuevo"><span class="ti-plus "></span>
            Agregar Empresa </button>
        <table class="table table-hover table-condensed table-bordered">
            <tr>
                <td>Codigo</td>
                <td>Nombre</td>
                <td>Fecha Constitucion</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Opciones</td>

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-warning ti-pencil " data-toggle="modal" data-target="#modalEdicion"></button>
                    <button class="btn btn-danger ti-trash"></button>

                </td>

            </tr>
        </table>
    </div>
</div>

<!-- modal para registros nuevos -->

<!-- Modal -->
<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="caj ">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Nombres</label>
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Apellidos</label>
                            <input type="password" class="form-control" placeholder="apellidos">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Correo</label>
                            <input type="email" class="form-control" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Cargo</label>
                            <select class="form-control">
                                <option>Adminstracion</option>
                                <option>Contaduria</option>
                                <option>Limpieza</option>
                                <option>Estructura</option>
                                <option>Profesores</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Contrasena</label>
                            <input type="password" class="form-control" placeholder="contrasena" required="">

                        </div>
                        <div class="form-group col-md-4">
                            <label>Repetir Contrasena</label>
                            <input type="password" class="form-control" placeholder="repetir contrasena">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- modal para edicion de datos -->

<!-- Modal -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




<!--*****************************************************-->




<!-- Este es el modal para guardar empresa -->


<!-- Modal -->
<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar nueva Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="caj ">
                    <div class="form-row">
                        <div class="form-group mr-5">
                            <label for="inputEmail4">Codigo</label>
                            <input type="text" class="form-control" placeholder="Codigo">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword4">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group fj">
                        <label for="inputPassword4">Fecha</label>
                            <div class="input-group date ">
                           
                                <input type="text" class="form-control"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>



</script>
<?php
require("partials/pies.php");

?>