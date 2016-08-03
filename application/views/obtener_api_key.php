<div class="row" ng-controller="apiAppCtrl as vm">
    <div class="col-sm-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <h3>Obtener API Key</h3>
            </div>
            <div class="panel-body">
                <form name="ObtenerApiKey" method="post">
                    <?php //echo form_open(base_url("index.php/register/newApiKey")) ?>
                    <input type="hidden" ng-model="vm.url"
                           value="<?php echo base_url("index.php/register/newApiKey") ?>"/>
                    <input type="button" ng-click="vm.getApiKey()" value="Obtener api key"/>
                    <!--input type="submit" class="getApiKet" value="Obtener mi api key"/-->
                    <p> Api Key genenerada: <strong>{{vm.apiKeyGen}}</strong></strong></p>
                </form>
                <?php //echo form_close() ?>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
<script>
    angular
        .module('apiApp', [])
        .controller('apiAppCtrl', ['$http', controladorPrincipal]);

    function controladorPrincipal($http) {
        var vm = this;
        vm.url = 'http://[::1]/codeigniter/index.php/register/newApiKey';
        vm.getApiKey = function () {
            $http.get(vm.url, {
                headers: {
                    'Content-type': 'application/json'
                }
            }).success(function (respuesta) {
                //console.log("res:", respuesta);
                vm.apiKeyGen = respuesta;
            });
        }
    }

</script>