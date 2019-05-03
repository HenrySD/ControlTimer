<?php
require("partials/cabeza.php");
?>
<div class="container">
<h3 class="text-center mb-3">Configuración</h3>


</div>
<div class="" id="box">

</div>

<script>
$(document).ready(function() {
    $('#box').load('tablas/tablaConfiguracion.php');
});
</script>
<?php
require("partials/pies.php");
?>