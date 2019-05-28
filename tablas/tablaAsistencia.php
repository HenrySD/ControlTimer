<?php
require("../database.php");
$conexion=conexion();
$sql1="SELECT Cod_Usua,Reg_Entr,Reg_Salida,Fec_Regi FROM tab_asis";
$resul=mysqli_query($conexion,$sql1);
?>

<table id="example" style="" class="table  table-condensed table-hover table-bordered">
    <thead style="background-color:#282D34; color:white; ">
        <tr>
            <td>ID</td>
            <td>Entrada</td>
            <td>Salida</td>
            <td>Fecha</td>
        </tr>
    </thead>
    <tfoot style="background-color:#282D34;color:white;">
        <tr>
        <td>ID</td>
            <td>Entrada</td>
            <td>Salida</td>
            <td>Fecha</td>
        </tr>
    </tfoot>
    <tbody>
    <?php
    while($mostrar=mysqli_fetch_row($resul)){
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
        </tr>
        <?php
    }
?>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        scrollY:        '50vh',
        scrollCollapse: true,
        paging:         false,
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        }, 
        dom: 'Bfrtip',
        
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
        
    });
});
</script>