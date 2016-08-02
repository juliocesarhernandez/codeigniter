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
        body{
            background-image: url("<?php echo base_url('public/images/background.png'); ?>");
            background-repeat: no-repeat;
        }

        .panel{
            margin-top: 20%;
        }

        a{
            color: #9ED5E4;
            font-size: 16px;
        }

    </style>
</head>
<body>
<div class="separator-tb">

</div>
<div>

</div>
<div class="row">
    <div class="col-sm-6 col-md-offset-3">
        <h3 style="color: #FFFFFF; text-align: center">&iexcl;Bienvenido a Kontrol!</h3>
        <div class="panel panel-default">
            <div class="panel-heading"><img src="<?php echo base_url('public/images/logo.png');?>"></div>
            <div class="panel-body">
                <div class="col-sm-8 col-md-offset-2">
                    <?php echo form_open(base_url("index.php/usuarios/usuarios/registrar")) ?>
                    <!--form class="form-horizontal"-->
                        <div class="form-group">
                            <input type="text" name="miApiKey" value="obtenerKey" />
                            <label for="nombre" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" required class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" required class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default btn-block">Entrar</button>
                            </div>
                        </div>
                    <?php echo form_close() ?>
                    <!--/form-->
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="#" style="text-align: center;">&iquest;Olvidaste tu contrase&ntilde;a?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <label>&iquest;No tienes cuenta?</label>&nbsp;
            <a href="#" style="text-align: center;">registrate aqu&iacute;</a>
        </div>

    </div>
</div>
</body>