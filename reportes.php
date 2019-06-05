<?php
require("partials/cabeza.php");
require("database.php");
$conexion=conexion();
?>
<div class="container text-center ">
    <div class="row">
        <div class="col-sm-11">
            <h3 class="text-center mb-4">Reportes asistencia</h3>
        </div>
        <div class="col-sm-1">
            <a><i class="ti-help-alt" style="font-size:25px; margin-left:30px;" data-toggle="modal"
                    data-target=".bd-example-modal-lg"></i></a>
        </div>
    </div>

    <form id="form1" method="POST" action="">
        <div class="row">
            <div class="col-sm-2">
                <label>Fecha inicio</label>
                <input type="text" class="form-control" id="FechaInicio" name="FechaInicio" readonly>
            </div>
            <div class="col-sm-2">
                <label>Fecha Final</label>
                <input type="text" class="form-control" id="FechaFinal" name="FechaFinal" readonly>
            </div>
            <div class="col-sm-2">
                <label>Empleado</label>
                <input type="text" class="form-control" id="IdEmpleado" name="IdEmpleado">

            </div>
            <div class="col-sm-2 mt-4">
                <button class="btn btn-danger" id="btnBuscar">Buscar</button>
            </div>
            <div class="col-sm-2 mt-4">
                <button class="btn btn-primary" >Refrescar</button>
            </div>
            <div class="col-sm-2 mt-4">
                <button class="btn btn-warning" >Reporte</button>
            </div>
        </div>
    </form>

    <div id="tabla">
    <?php


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
TIMEDIFF(Reg_Salida, Reg_Entr) AS 'Duracion'

FROM
tab_asis
INNER JOIN tab_usua ON tab_asis.Cod_Usua = tab_usua.Cod_Usua
WHERE
tab_asis.Cod_Usua= '$id' AND Fec_Regi BETWEEN '$i' AND '$f'";
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
            <td colspan="6">Total de Duracion</td>
            <td>Suma de horas</td>
    </tbody>
    <thead style="background-color:#282D34;color:white;">
        <tr>
        <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Hora entrada</td>
            <td>Hora salida</td>
            <td>Fechas</td>
            <td>Duracion</td>
        </tr>
    </thead>
   
</table>

    </div>
</div>
<!-- este es el modal de ayuda-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<script>
</script>

<script>
$("#FechaInicio").datepicker({
    // Siquiere colocar fechas futuras usar minDate()
    // Si quiere usar fechas pasadas usar maxDate()
    maxDate: new Date(),
    dateFormat: "yy-mm-dd"

});
$("#FechaFinal").datepicker({
    // Siquiere colocar fechas futuras usar minDate()
    // Si quiere usar fechas pasadas usar maxDate()
    maxDate: new Date(),
    dateFormat: "yy-mm-dd"

});
</script>
<script>

</script>
<?php
require("partials/pies.php");
?>