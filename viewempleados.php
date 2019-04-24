<?php

require("partials/cabeza.php");
?>
<!--Aca Todo lo del lado derecho-->
<div class="row">
    <div class="col-sm-12">
        <h5 class="text-center pb-3"> Empleados</h5>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#nuevo">Agregar Empleado <span class="ti-plus "></span></button>
        <table class="table table-hover table-condensed table-bordered">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Usuario</td>
                <td>email</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-warning ti-pencil " data-toggle="modal" data-target="#modalEdicion"></button>
                </td>
                <td>
                    <button class="btn btn-danger ti-trash"></button>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- modal para registros nuevos -->

<!-- Modal -->
<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar nuevo empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="caj ">
        <div class="form-row">
            <div class="form-group mr-5">
                <label for="inputEmail4">Nombres</label>
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Apellidos</label>
                <input type="password" class="form-control" placeholder="apellidos">
            </div>
            <div class="form-group col-xl-12">
                <label>Correo</label>
                <input type="email" class="form-control" placeholder="Correo">
            </div>
        </div>
        <div class="form-row">
            
            <div class="form-group ">
                <label class="text-center">Cargo</label>
                <select class="form-control">
                    <option>Adminstracion</option>
                    <option>Contaduria</option>
                    <option>Limpieza</option>
                    <option>Estructura</option>
                    <option>Profesores</option>
                </select>
            </div>

        </div>
            <div class="form-group">
                <label for="">Contrasena</label>
                <input type="password" class="form-control" placeholder="contrasena" required="">

            </div>
            <div class="form-group">
                <label>Repetir Contrasena</label>
                <input type="password" class="form-control" placeholder="repetir contrasena">
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