<?php
require("partials/cabeza.php");
?>
<!--Aca Todo lo del lado derecho-->
    <form class="caj ">
    <h5 class="text-center">Registrar Nuevos usuarios</h5>
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
        


        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
<?php
require("partials/pies.php");

?>