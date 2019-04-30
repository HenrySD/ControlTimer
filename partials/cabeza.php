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



    <script src="carpetas\js\jquery.js"></script>
    <script src="alertify/alertify.js"></script>
    <script src="carpetas/popper/dist/umd/popper.min.js"></script>
    <script src="carpetas/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
    
    <script src="carpetas\js\funciones.js"></script>

  


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/fc-3.2.5/fh-3.1.4/r-2.2.2/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/fc-3.2.5/fh-3.1.4/r-2.2.2/datatables.min.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>



    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--estos cdn son de prueba para los botones-->
    <script src="carpetas\DataTables\DataTables-1.10.18\js\dataTables.bootstrap4.min.js"></script>
    <script src="carpetas/js/main.js"></script>
    <link rel="stylesheet" href="carpetas\DataTables\DataTables-1.10.18\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--estilo de CSS y CDN'S-->
    <link rel="stylesheet" href="carpetas\DataTables\datatables.css">
    <link rel="stylesheet" href="carpetas\DataTables\DataTables-1.10.18\css\dataTables.bootstrap.css">
    <!--*****************************************************-->
    <link rel="stylesheet" href="carpetas/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="carpetas/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="carpetas/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="carpetas/css/planillaEstilo.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!--********************Archivos de alertas**************************-->
    <link rel="stylesheet" href="alertify/css/themes/default.css">
    <link rel="stylesheet" href="alertify/css/alertify.css">




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
                        <a href="configuracion.php"> <i class="menu-icon ti-headphone-alt"></i>Configuración</a>
                    </li>
                    </li>
                    <li>
                        <a href="asistencia.php"> <i class="menu-icon ti-save "></i>Listado asistencia </a>
                    </li>
                    <li>
                        <a href="empresa.php"><i class="menu-icon ti-world"></i>Empresa </a>
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

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Perfil </a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notificaciones <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Configuración</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Cerrar Cessión</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="content mt-2">