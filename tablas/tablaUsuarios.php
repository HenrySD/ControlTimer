<?php
require("../database.php");
$conexion=conexion();
$sql="SELECT Cod_Usua,Cod_Empr,Cod_Turn,Tip_Usua,Nom_Usua,Ape_Usua,Dir_Usua,Ema_Usua,Tel_Usua FROM tab_usua";
$resultado=mysqli_query($conexion,$sql);
?>
<table id="example" style="" class="table  table-condensed table-hover table-bordered witdth-100%">
    <thead style="background-color:#282D34; color:white; ">
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
        </tr>
    </thead>
    <tfoot style="background-color:#282D34;color:white; text-aling:center;">
        <tr >
        <td>Código</td>
            <td>Empresa</td>
            <td>Turno</td>
            <td>Tipo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Email</td>
            <td>Telefono</td>
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
            <td>
                <?php echo $mostrar[6]?>
            </td>
            <td>
                <?php echo $mostrar[7]?>
            </td>
            <td>
                <?php echo $mostrar[8]?>
            </td>
        <?php
    }
?>
        
    </tbody>
</table>
<script>
$(document).ready(function() {
    

  
    $('#example').DataTable({
        
            dom: "Bfrtip",
            buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print',
            
        ]

    });
} );
</script>