<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Kontrol</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('public/images/kichink_favicon.png'); ?>">
    <script src="<?php echo base_url('public/js/jquery-3.1.0.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="App">

<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">


    <!-- Main Sidebar -->
    <div id="sidebar">
        <!-- Sidebar Brand -->
        <div id="sidebar-brand" class="text-center">
            <div class="sidebar-logo">
                <img src="<?php echo base_url('public/images/logo-light.png'); ?>"/>
            </div>

            <img src="<?php echo base_url('public/images/avatar.png'); ?>"/>
            <h4 class="text-muted"><strong>Kraken piezas unicas</strong></h4>
        </div>
        <!-- END Sidebar Brand -->

        <!-- Wrapper for scrolling functionality -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li>
                        <span class="info"></span>
                        <a href="<?php echo site_url('apiKey/apiKey'); ?>">
                            <i class="fa text-info fa-lg  fa-shopping-bag sidebar-nav-icon"></i><span>API Key </span>
                        </a>
                    </li>
                    <li>
                        <span class="info"></span>
                        <a href="<?php echo site_url('log/log/listar'); ?>">
                            <i class="fa text-info fa-lg  fa-shopping-bag sidebar-nav-icon"></i><span>Log </span>
                        </a>
                    </li>
                    <li>
                        <span class="info">
                            <i class="fa fa-circle text-success"></i>
                        </span>
                        <a href="<?php echo site_url('usuarios/usuarios/listar'); ?>" class="sidebar-nav-menu">
                            <i class="fa text-info fa-lg fa-home sidebar-nav-icon"></i>
                            <span>Lista de usuarios</span>
                            <!--span class="badge bg-success pull-right notification">2</span-->
                        </a>
                    </li>
                </ul>
                <!-- END Sidebar Navigation -->
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Wrapper for scrolling functionality -->


    </div>
    <!-- END Main Sidebar -->


    <!-- Main Container -->
    <div id="main-container">


        <header class="navbar navbar-default navbar-fixed-top shadow-z-1-hover">
            <ul class="nav navbar-nav-custom">
                <li class="no-margin">
                    <a href="javascript:void(0)" onclick="AppConfig.toogleSidebar();">

                        <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                    </a>
                </li>

                <li class="animation-fadeInQuick">


                    <a href="javascript:" class="hidden-xs pull-right">
                        <strong>HOME</strong>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav-custom pull-right">


                <li>

                    <a href="javascript:">
                                <span class="text-default">
                                        Saldo
                                </span>
                                <span class="text-primary">
                                        $8,250
                                </span>
                    </a>

                </li>

                <li class="no-margin">
                    <a href="javascript:">
                        <span class="text-default">
                                        ¡Hola
                                </span>
                                <span class="text-primary">
                                        Craken
                                </span>
                    </a>
                </li>
                <li class="no-margin">
                    <img src="<?php echo base_url('public/images/avatar.png'); ?>"/>
                </li>
                <li class="dropdown no-margin">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-angle-down"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">

                        <li>
                            <a href="javascript:">
                                Configuración
                            </a>
                        </li>

                        <li>
                            <a href="javascript:">
                                Ayuda
                            </a>
                        </li>
                        <li>
                            <a href="javascript:">
                                Salir
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </header>

        <div id="page-content">
            <?php echo $content; ?>
        </div>

    </div>
    <!-- END Main Container -->
</div>
<script>
    APIURL = '<?php echo base_url('/index.php'); ?>/';
</script>
<!--script src="<?php echo base_url('public/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('public/bower_components/angular/angular.min.js'); ?>"></script>
<script src="<?php echo base_url('public/js/angular/app.js'); ?>"></script-->
<!--script
    src="<?php echo base_url('public/bower_components/angular-ui-router/release/angular-ui-router.min.js'); ?>"></script>
<script src="<?php echo base_url('public/bower_components/sweetalert/dist/sweetalert.min.js'); ?>"></script-->
<script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
<!--script src="<?php echo base_url('public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>

<!--script src="<?php echo base_url('public/bower_components/remarkable-bootstrap-notify/bootstrap-notify.min.js'); ?>"></script>
<script src="<?php echo base_url('public/bower_components/bootbox.js/bootbox.js'); ?>"></script-->

<!--script src="<?php echo base_url('public/js/App.js'); ?>"></script-->

<?php if (isset($javascripts)) : ?>
    <?php foreach ($javascripts as $javascript): ?>
        <script src="<?php echo base_url("public/{$javascript}"); ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
<script>
    window.old_alert = window.alert;
    window.alert = function (message, fallback) {
        bootbox.alert(message, fallback);
    }
</script>
</body>
</html>