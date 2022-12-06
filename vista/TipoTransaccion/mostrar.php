<section class="content">
    <div class="container-fluid">
        
        <a href="?ctrl=CtrlTipoTransaccion&accion=nuevo" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo Transaccion</a>
            <a href="index.php" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Retornar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id Tipo Transaccion:</th>
                    <th>Transaccion</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $a) { ?>
                <tr>
                        <td><?=$a['idTipoTransaccion']?></td>
                        <td><?=$a['Transaccion']?></td>
                    <td>
                        <a href="?ctrl=CtrlTipoTransaccion&accion=editar&id=<?=$a['idTipoTransaccion']?>">
                            <i class="bi bi-pencil-square"></i> Editar</a>
                        / 
                        <a data-id="<?=$a['idTipoTransaccion']?>" data-nombre="<?=$a['Transaccion']?>" class="eliminar" href="#">
                            <i class="bi bi-trash"></i>  Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<div class="modal fade" id="modal-eliminar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminando registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="login-box-msg">¿Estas seguiro que deseas eliminar el registro</p>
                <p class="reg-eliminacion"></p>
                <div class="row">
                <!-- /.col -->
                    <div class="col-4">
                        <a  class="btn btn-primary btn-block" id="btn-confirmar" href="">Si</a>
                    </div>
                    <div class="col-4">
                        <button type="button" data-dismiss="modal" class="btn btn-secundary btn-block">No</button>
                    </div>
                    <!-- /.col -->
                </div>
                

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>