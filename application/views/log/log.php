<div class="">
    <div class="col-sm-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <h3>Registro de log</h3>
            </div>
            <div class="panel-body">
                <table class="table table bordered table-hover">
                    <thead>
                    <tr>
                        <th>URI</th>
                        <th>PARAMS</th>
                    </tr>
                    </thead>
                    <tbod>
                        <?php
                        foreach ($logs as $log) {
                            ?><tr>
                            <td><?php echo $log->uri ?></td>
                            <td><?php echo $log->params ?></td>
                            </tr><?php
                        }

                        ?>
                    </tbod>
                </table>
            </div>
        </div>

    </div>
</div>