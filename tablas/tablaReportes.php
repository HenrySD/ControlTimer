<?php
require("../database.php");

$i=$_POST['FechaInicio'];
$f=$_POST['FechaFinal'];
$id=$_POST['IdEmpleado'];


$conexion=conexion();
$sql="SELECT
tab_asis.Cod_Usua AS ID,
tab_usua.Nom_Usua AS Nombre,
tab_usua.Ape_Usua As Apellido,
tab_asis.Reg_Entr AS Entrada,
tab_asis.Reg_Salida AS Salida,
tab_asis.Fec_Regi AS Fecha,
TIMEDIFF(Reg_Salida, Reg_Entr) AS 'Duración'

FROM
tab_asis
INNER JOIN tab_usua ON tab_asis.Cod_Usua = tab_usua.Cod_Usua
WHERE
tab_asis.Cod_Usua= '$id' AND Fec_Regi BETWEEN '$i' AND '$f'";
$resultado=mysqli_query($conexion,$sql);






?>

<table class="table  table-condensed table-hover table-bordered my-5" id="ultima">
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
        </tr>
        <?php
    }


?>
            <td colspan="4">Total de Duracion</td>
            <td>$100.00</td>
    </tbody>
    <thead style="background-color:#282D34;color:white;">
        <tr>
            <td>IdEmpleado</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Hora entrada</td>
            <td>Hora salida</td>
            <td>Fechas</td>
            <td>Duracion</td>
        </tr>
    </thead>
   
</table>
<script>
$(document).ready(function() {
    $('#ultima').DataTable({
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