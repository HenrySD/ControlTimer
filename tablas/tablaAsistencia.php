<table id="example" style="" class="table  table-condensed table-hover table-bordered">
    <thead style="background-color:#282D34; color:white; ">
        <tr>
            <td>Codigo Asistencia</td>
            <td>Codigo Usuario</td>
            <td>Entrada</td>
            <td>Salida</td>
            <td>Fecha</td>


        </tr>
    </thead>
    <tfoot style="background-color:#282D34;color:white;">
        <tr>
            <td>Codigo Asistencia</td>
            <td>Codigo Usuario</td>
            <td>Entrada</td>
            <td>Salida</td>
            <td>Fecha</td>
        </tr>
    </tfoot>
    <tbody>

        <tr>
            <td>0001</td>
            <td>2356</td>
            <td>14:10</td>
            <td>22:30</td>
            <td>2019-04-12</td>
        </tr>

        <tr>
            <td>0001</td>
            <td>2357</td>
            <td>14:05</td>
            <td>22:10</td>
            <td>2019-04-12</td>
        </tr>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
});
</script>