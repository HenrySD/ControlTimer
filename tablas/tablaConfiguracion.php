<?php
require("../database.php");
$conexion=conexion();
$sql="SELECT Cod_Turn,Des_Turn,Hor_Entr,Hor_Sali,Lim_Tiem FROM tab_turn";
$resultado=mysqli_query($conexion,$sql);
?>
<table id="exampleC" style="" class=" text-center table  table-condensed table-hover table-bordered">
    <thead style="background-color:#282D34; color:white; ">
        <tr>
            <td>Código</td>
            <td>Descripción</td>
            <td>Hora entrada</td>
            <td>Hora salida</td>
            <td>Limite de tiempo</td>
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
            <td><button class="btn btn-warning " data-toggle="modal" data-target="#editar"
                    onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')"><i class="ti-pencil-alt"></i></button>
            </td>
        </tr>
        <?php
}
?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#exampleC').DataTable({
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