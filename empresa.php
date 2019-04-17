<?php

require("partials/cabeza.php");
require("database.php");

$conexion=conexion();
?>
<!--Aca Todo lo del lado derecho body-->

<div class="container box">
    <h3 class="text-center m-3">Tabla Empresa</h3>
    <button class="btn btn-primary m-2" data-toggle="modal" data-target="#nuevo"> Agregar Empresa</button>


    <table id="example" class="table table-hover table-condensed  table-bordered">
        <tr>
            <td>Codigo Empresa</td>
            <td>Nombre Empresa</td>
            <td>Fecha Constitucion</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
        <?php
        $sql="SELECT cod_Empr,nom_Empr,fec_Cons,dir_Empr,tel_Empr
        FROM tab_empr ";
    $result=mysqli_query($conexion,$sql);

    while($ver=mysqli_fetch_row($result)){
        ?>
        <tr>
            <td><?php  echo $ver[0]?></td>
            <td><?php  echo $ver[1]?></td>
            <td><?php  echo $ver[2]?></td>
            <td><?php  echo $ver[3]?></td>
            <td><?php  echo $ver[4]?></td>
            <td>
                <button class="btn btn-warning text-light"><i class="fas fa-pen"></i></button>
            </td>
            <td>
                <button class="btn btn-danger text-light text-center"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

</div>
<!-- Este es el modal para guardar empresa-->
<div class="modal fade col-xl-12" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
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
                <form class="caj">
                    <div class="form-row">
                        <div class="form-group mr-5">
                            <label>Codigo</label>
                            <input type="text" class="form-control" placeholder="Codigo" id="cod_Empr">
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" id="nom_Empr">
                        </div>
                        <div class="form-group mr-5">
                            <label>Fecha</label>
                            <input type="text" class="form-control" id="fec_Cons">

                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" id="tel_Empr">

                        </div>

                    </div>

                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" id="dir_Empr">

                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="guardarnuevo">Guardar</button>
            </div>
        </div>
    </div>
</div>


<?php
require("partials/pies.php");

?>