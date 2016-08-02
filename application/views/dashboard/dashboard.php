<div class="separator-tb">

</div>

<div class="row" ng-controller="UsuarioController">
    <div class="col-sm-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Usuario</div>
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