<?php
session_start();

if(isset($_SESSION['usu'])){
$man=$_SESSION['usu'];
}
else{
header('Location:index.php');
}
?>
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control Timer</title>
    <meta name="description" content="ControlTimer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require("cnd.php");
    ?>
    <!--todos los script movidos de la parte pies-->
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="carpetas/img/logo.jpg" alt="Logo1"></a>
                <a class="navbar-brand hidden" href=""><img src="carpetas/img/logo2.png" alt="Logo2"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="singup.php"> <i class="menu-icon ti-home"></i>Inicio </a>
                    </li>
                    <li>
                        <a href="usuarios.php"> <i class="menu-icon ti-user"></i>Usuarios </a>
                    </li>
                    <li>
                        <a href="configuracion.php"> <i class="menu-icon ti-settings"></i>Configuración</a>
                    </li>
                    </li>
                    <li>
                        <a href="asistencia.php"> <i class="menu-icon ti-check-box "></i>Asistencia </a>
                    </li>
                    <li>
                        <a href="empresa.php"><i class="menu-icon ti-world"></i>Empresa </a>
                    </li>
                    <li>
                        <a href="reportes.php"><i class="menu-icon ti-printer"></i>Reportes </a>
                        
                    </li>
                    <li>
                        <a href="empleado.php"><i class="menu-icon ti-layout-tab"></i>Empleados </a> 
                    </li>
                    <li>
                        <a href="acercade.php"><i class="menu-icon ti-info-alt"></i>Acerca de </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <!--boton rojo para hacer mas pequeno el menu-->
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="carpetas/img/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Cerrar Cessión</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        <div class="content mt-2">