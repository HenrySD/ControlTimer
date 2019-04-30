<table id="example" style="" class="table  table-condensed table-hover table-bordered witdth-100%">
    <thead style="background-color:#282D34; color:white; ">
        <tr>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Dirección</td>
            <td>Correo</td>
            <td>Teléfono</td>
            <td>Turno</td>
            <td>Tipo</td>
            <td>Empresa</td>

        </tr>
    </thead>
    <tfoot style="background-color:#282D34;color:white; text-aling:center;">
        <tr >
            <td>Código</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Dirección</td>
            <td>Correo</td>
            <td>Teléfono</td>
            <td>Turno</td>
            <td>Tipo</td>
            <td>Empresa</td>
        </tr>
    </tfoot>
    <tbody>

        <tr class="text-break">
            <td>2356</td>
            <td>Jenifer</td>
            <td>Deras</td>
            <td>Ilobasco, cabanas el salvador</td>
            <td>jenifer@gmail.com</td>
            <td>7952-9979</td>
            <td>Matutino</td>
            <td>Empleado</td>
            <td>Remodelaciones mira</td>
        </tr>
        
        <tr>
        <td>2357</td>
            <td>Jose</td>
            <td>Peres</td>
            <td>Ilobasco, cabanas el salvador</td>
            <td>joseperez@gmail.com</td>
            <td>23568947</td>
            <td>Matutino</td>
            <td>Empleado</td>
            <td>Coca cola</td>
        </tr>
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