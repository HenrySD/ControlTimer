<?php
require("partials/cabeza.php");
?>
<div class="container ">
    <div class="row">
        <div class="col-sm-11">
            <h3 class="text-center">Listado de asistencia</h3>
        </div>
        <div class="col-sm-1">
            <a><i class="ti-help-alt" style="font-size:25px; margin-left:30px;" data-toggle="modal"
                    data-target="#exampleModalCenter"></i></a>
        </div>
    </div>
    <div class="" id="box">

    </div>
</div>

<script>
$(document).ready(function() {
    $('#box').load('tablas/tablaAsistencia.php');
});
</script>
<?php
require("partials/pies.php");
?>