<?php
require("partials/cabeza.php");
?>
<div class="container">
<h3 class="text-center">Asistencia</h3>


</div>
<div class="" id="box">

</div>

<script>
$(document).ready(function() {
    $('#box').load('tablas/tablaAsistencia.php');
});
</script>
<?php
require("partials/pies.php");
?>