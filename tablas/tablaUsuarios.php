<table id="example" style="" class="table  table-condensed table-hover table-bordered">
    <thead style="background-color:#282D34; color:white; ">
        <tr>
            <td>Codigo Usuario</td>
            <td>Empresa</td>
            <td>Tipo Usuario</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Correo</td>
            <td>Dia Pago</td>

        </tr>
    </thead>
    <tfoot style="background-color:#282D34;color:white;">
        <tr>
            <td>Codigo Usuario</td>
            <td>Empresa</td>
            <td>Tipo Usuario</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Correo</td>
            <td>Dia Pago</td>
        </tr>
    </tfoot>
    <tbody>

        <tr>
            <td>2356</td>
            <td>Remodelaciones mira</td>
            <td>Empleado</td>
            <td>Jenifer</td>
            <td>Deras</td>
            <td>Ilobasco, cabanas el salvador</td>
            <td>jenifer@gmail.com</td>
            <td>2019-03-12</td>
        </tr>
        
        <tr>
            <td>2357</td>
            <td>Remodelaciones mira</td>
            <td>Empleado</td>
            <td>Jose</td>
            <td>Peres</td>
            <td>Ilobasco, cabanas el salvador</td>
            <td>peres@gmail.com</td>
            <td>2019-03-12</td>
        </tr>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>