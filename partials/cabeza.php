<?php
session_start();


if(isset($_SESSION['sessionUsuario'])){

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Control Timer</title>
    <meta name="description" content="ControlTimer">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!--estilo de CSS y CDN'S falta linkearlos-->
    <link rel="stylesheet" href="carpetas/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="carpetas/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="carpetas/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="carpetas/css/planillaEstilo.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!--********************Archivos de alertas**************************-->
    <link rel="stylesheet" href="alertify/css/themes/default.css">
    <link rel="stylesheet" href="alertify/css/alertify.css">
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img></a>
                <a class="navbar-brand hidden" href="./"><img src="carpetas/img/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>

                        </ul>
                    </li>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li>
                        <a href="#"><i class="menu-icon ti-email"></i>Widgets </a>
                    </li>



                    <!--*******************-->
                    <!---->
                    <!--*******************-->

                    <!--*******************-->
                    <!--holacamkcmakc-->
                    <!--*******************-->


                    <!--//////////////////////////////-->
                    <!---->
                    <!--//////////////////////////////-->
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
                    <h5 class="text-center">Bienvenido <?php echo($_SESSION['sessionUsuario']);?> </h5>

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

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Configuracion</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Cerrar Cession</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->



        <div class="content mt-3">


            <?php
        
        
}else{
header("location:index.php");
}


?>