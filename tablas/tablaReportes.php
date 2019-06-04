<?php
require("../database.php");

$i=$_POST['FechaInicio'];
$f=$_POST['FechaFinal'];
$id=$_POST['IdEmpleado'];


$conexion=conexion();
$sql="SELECT
Cod_Usua,
Fec_Regi,
Reg_Entr,
Reg_Salida,
TIMEDIFF(Reg_Salida, Reg_Entr) AS 'Duracion'
FROM
tab_asis
WHERE
Cod_Usua = '$id' AND Fec_Regi BETWEEN '$i' AND '$f'";
$resultado=mysqli_query($conexion,$sql);

?>

<table class="table  table-condensed table-hover table-bordered my-5">
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
            <td>Fechas</td>
            <td>Hora entrada</td>
            <td>Hora salida</td>
            <td>Duracion</td>
        </tr>
    </thead>
   
</table>