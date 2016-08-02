<!--DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .getApiKet{
            width: 400px;
            padding: 20px;
            margin: 0 auto;
            border-radius: 20px;
            background: #990000;
            color: #f9f9f9;
            cursor: pointer;
        }
    </style>
    <title><?php //echo $titulo ?></title>
</head>
<body>
<?php //echo form_open(base_url("index.php/register/newApiKey")) ?>
<input type="text" name="usuario" placeholder="Usuario" required>
<input type="password" name="password" placeholder="Password" required>
<input type="text" name="miApiKey" value="get!" />
<input type="submit" class="getApiKet" value="Obtener mi api key" />
<?php echo form_close() ?>
</body>
</html-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Alta</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('public/images/kichink_favicon.png'); ?>">
    <script src="<?php echo base_url('public/js/jquery-3.1.0.min.js');?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body
        {
            background-image: url("<?php echo base_url('public/images/background.png'); ?>");
            background-repeat: no-repeat;
        }

        .panel{
            margin-top: 20%;
        }

    </style>
</head>
<body background="<?php echo base_url('public/images/background.png'); ?>">
<div class="separator-tb">

</div>

<div class="row" ng-controller="UsuarioController">
    <div class="col-sm-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><img src="<?php echo base_url('public/images/logo.png');?>"></div>
            <div class="panel-body">
                <div class="col-sm-8 col-md-offset-2">
                    <form class="form-horizontal" ng-submit="registrar()">
                        <div class="form-group">
                            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" required class="form-control" ng-model="usuario.nombre" id="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" required class="form-control" ng-model="usuario.email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit"  class="btn btn-default btn-block">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
</body>