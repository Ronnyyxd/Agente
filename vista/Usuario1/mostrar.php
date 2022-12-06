<section class="content">
    <div class="container-fluid">
        
        <a href="?ctrl=CtrlUsuario1&accion=nuevo" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo Usuario</a>
            <a href="index.php" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Retornar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id Usuario:</th>
                    <th>DNI</th>
                    <th>Nombre Usuario:</th>
                    <th>Id  Tipo de Usuario</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $a) { ?>
                <tr>
                        <td><?=$a['Id_Usuario']?></td>
                        <td><?=$a['DNI']?></td>
                        <td><?=$a['nombre']?></td>
                        <td><?=$a['idTipoUsuario']?></td>
                    <td>
                        <a href="?ctrl=CtrlUsuario1&accion=editar&idAgente=<?=$a['Id_Usuario']?>">
                            <i class="bi bi-pencil-square"></i> Editar</a>
                        / 
                        <a data-id="<?=$a['Id_Usuario']?>" data-nombre="<?=$a['DNI']?>" class="eliminar" href="#">
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