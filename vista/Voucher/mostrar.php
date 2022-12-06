<section class="content">
    <div class="container-fluid">
        
        <a href="?ctrl=CtrlVoucher&accion=nuevo" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo Voucher </a>
            <a href="index.php" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Retornar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id Voucher:</th>
                    <th>Fecha</th>
                    <th>Hora:</th>
                    <th>N° de Operacion</th>
                    <th>Importe_transaccion:</th>
                    <th>Cargo fijo</th>
                    <th>Mora :</th>
                    <th>Total deuda</th>
                    <th>Comision:</th>
                    <th>Total a pagar</th>
                    <th>Id Empresa:</th>
                    <th>Id  Agente</th>
                    <th>Id Tipo Transaccion:</th>
                    <th>Id Cuenta</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $a) { ?>
                <tr>
                    <td><?=$a['Id_voucher']?></td>
                    <td><?=$a['Fecha']?></td>
                    <td><?=$a['Hora']?></td>
                    <td><?=$a['Numero_operacion']?></td>
                    <td><?=$a['Importe_transaccion']?></td>
                    <td><?=$a['Cargo_fijo']?></td>
                    <td><?=$a['Mora']?></td>
                    <td><?=$a['Total_deuda']?></td>
                    <td><?=$a['Comision']?></td>
                    <td><?=$a['Total_pagar']?></td>
                    <td><?=$a['idEmpresa']?></td>
                    <td><?=$a['idAgente']?></td>
                    <td><?=$a['idTipoTransaccion']?></td>
                    <td><?=$a['idCuenta']?></td>
                    <td>
                        <a href="?ctrl=CtrlVoucher&accion=editar&id=<?=$a['Id_voucher']?>">
                            <i class="bi bi-pencil-square"></i> Editar</a>
                        / 
                        <a data-id="<?=$a['Id_voucher']?>" data-nombre="<?=$a['Fecha']?>" class="eliminar" href="#">
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