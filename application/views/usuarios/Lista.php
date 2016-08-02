<div class="">
    <div class="col-sm-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <h3>Usuarios registrados</h3>
            </div>
            <div class="panel-body">
                <table class="table table bordered table-hover">
                    <thead>
                    <tr>
                        <th>
                            Email
                        </th>
                        <th>
                            Contrase&ntilde;a
                        </th>
                    </tr>
                    </thead>
                    <tbod>
                        <?php
                        foreach ($usuarios as $usuario) {
                            ?><tr>
                                <td><?php echo $usuario->email ?></td>
                                <td><?php echo $usuario->password ?></td>
                            </tr><?php
                        }

                        ?>
                    </tbod>
                </table>
            </div>
        </div>

    </div>
</div>