<?php
require("../database.php");
$conexion=conexion();
$sql1="SELECT Cod_Usua,Reg_Entr,Reg_Salida,Fec_Regi FROM tab_asis";
$resul=mysqli_query($conexion,$sql1);
?>

    <table id="muestra" class="display" class="table  table-condensed table-hover table-bordered mt-5">
        <thead style="background-color:#282D34; color:white; " >
            <tr>
                <td>ID</td>
                <td>Entrada</td>
                <td>Salida</td>
                <td>Fecha</td>
            </tr>
        </thead>
        

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

$('.display').DataTable({
        scrollY:        300,
        scrollCollapse: true,
        paging:         false,
        "ordering": false,
        filter: false,
        info:false
        
});
</script>