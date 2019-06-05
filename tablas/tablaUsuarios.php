<?php
require("../database.php");
$conexion=conexion();
$sql="SELECT Cod_Usua,tab_empr.Nom_Empr,tab_turn.Des_Turn,Tip_Usua,Nom_Usua,Ape_Usua,Dir_Usua,Ema_Usua,Tel_Usua
FROM tab_usua
INNER JOIN tab_empr ON tab_usua.Cod_Empr = tab_empr.Cod_Empr
INNER JOIN tab_turn ON tab_usua.Cod_Turn = tab_turn.Cod_Turn
";
$resultado=mysqli_query($conexion,$sql);
?>
<table  id="example" class=" text-center table  table-condensed table-hover table-bordered table-sm">
    <thead style="background-color:#282D34; color:white;">
        <tr>
            <td>Código</td>
            <td>Empresa</td>
            <td>Turno</td>
            <td>Tipo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Email</td>
            <td>Telefono</td>
            <td>Opciones</td>
        </tr>
    </thead>
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
            <td>
                <?php echo $mostrar[6]?>
            </td>
            <td>
                <?php echo $mostrar[7]?>
            </td>
            <td>
                <?php echo $mostrar[8]?>
            </td>
            <td>
            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarUsuario"><i
            onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')"  class="ti-pencil-alt"></i></button>
                <button class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')"><i class="ti-trash"></i></button>
            </td>
        <?php
    }
?>
        
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        scrollY:        '40vh',
        scrollCollapse: true,
        paging:         false,
        
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },      
        dom:'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
                ]
    
    });
} );
</script>