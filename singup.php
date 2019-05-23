<?php

require("partials/cabeza.php");
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
                        <div class="stat-text">Usuarios</div>
                        <div class="stat-digit">0000</div>
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
                        <div class="stat-digit">0000</div>
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
                        <div class="stat-digit">0000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require("partials/pies.php");

?>