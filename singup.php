<?php

require("partials/cabeza.php");

require('database.php');
$conexion=conexion();
$sqlCuentaUsua="SELECT count(Cod_Usua) FROM tab_usua";
$cuenta=mysqli_query($conexion,$sqlCuentaUsua);

while($mostrar=mysqli_fetch_row($cuenta)){
    $row=$mostrar[0];
}



?>
<!--Aca Todo lo del lado derecho-->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="carpetas/img/remodelaciones.jpg" alt="">
        </div>
    </div>

</div>
<div class="content mt-3">

    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Bienvenido</span> Al sistema ControlTimer <?=$man?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Usuarios Registrados</div>
                        <div class="stat-digit text-center"><?php echo $row?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Asistidos</div>
                        <div class="stat-digit text-center">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Inisistidos</div>
                        <div class="stat-digit text-center">2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require("partials/pies.php");

?>