<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <h3>Obtener API Key</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open(base_url("index.php/register/newApiKey")) ?>
                <input type="text" name="miApiKey" value="obtenerKey"/>
                <input type="submit" class="getApiKet" value="Obtener mi api key"/>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
