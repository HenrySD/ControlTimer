<?php

require("database.php");
$conexion=conexion();

$sql="SELECT Cod_Empr,Nom_Empr,Fec_Cons,Dir_Empr,Ema_Empr,Tel_Empr FROM tab_empr";

$resultado=mysqli_query($conexion,$sql);


?>
<table id="example" style="with:100%;" class="table  table-condensed table-hover table-bordered">
    <thead style="background-color:#dc3545; color:white; font-weight:bold;">
        <tr>
            <td>Codigo Empresa</td>
            <td>Nombre Empresa</td>
            <td>Fecha Constitucion</td>
            <td>Direccion</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>Opciones</td>
            
        </tr>

    </thead>
    <tfoot style="background-color:#ccc;color:white;  font-weight:bold;">
        <tr>
            <td>Codigo Empresa</td>
            <td>Nombre Empresa</td>
            <td>Fecha Constitucion</td>
            <td>Direccion</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>Opciones</td>
            
        </tr>

    </tfoot>
    <tbody>
        <?php
    while($mostrar=mysqli_fetch_row($resultado)){
    ?>
        <tr>
            <td>
                <?php echo $mostrar[0]?>
            </td>
            <td>
                <?php echo $mostrar[1]?>
            </td>
            <td>
                <?php echo $mostrar[2]?>
            </td>
            <td>
                <?php echo $mostrar[3]?>
            </td>
            <td>
                <?php echo $mostrar[4]?>
            </td>
            <td>
                <?php echo $mostrar[5]?>
            </td>
            <td><button class="btn btn-warning mt-4 "><i class="ti-pencil-alt"></i></button><button class="btn btn-danger mt-4"><i class=" ti-trash""></button></td>
            
            
        </tr>
        <?php
}
?>
    </tbody>
</table>

<script>
$(document).ready(function(){
$('#example').DataTable();
});

</script>