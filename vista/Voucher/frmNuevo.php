<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlVoucher&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">id de Voucher : </span>
            <input type="text" class="form-control" placeholder="Id_voucher:"  name="Id_voucher" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Fecha : </span>
            <input type="text" class="form-control" placeholder="Fecha"  name="Fecha" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Hora: </span>
            <input type="text" class="form-control" placeholder="Hora"  name="Hora" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Numero de Operacion: </span>
            <input type="text" class="form-control" placeholder="Numero_operacion"  name="Numero_operacion" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Importe de Transaccion: </span>
            <input type="text" class="form-control" placeholder="Importe_transaccion"  name="Importe_transaccion" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Cargo Fijo: </span>
            <input type="text" class="form-control" placeholder="Cargo_fijo"  name="Cargo_fijo" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Mora: </span>
            <input type="text" class="form-control" placeholder="Mora"  name="Mora" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Total de deuda: </span>
            <input type="text" class="form-control" placeholder="Total_deuda"  name="Total_deuda" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Comision: </span>
            <input type="text" class="form-control" placeholder="Comision"  name="Comision" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Total a Pagar: </span>
            <input type="text" class="form-control" placeholder="Total_pagar"  name="Total_pagar" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">id de Empresa: </span>
            <input type="text" class="form-control" placeholder="idEmpresa"  name="idEmpresa" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">id de Agente: </span>
            <input type="text" class="form-control" placeholder="idAgente"  name="idAgente" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">id Tipo de Transaccion: </span>
            <input type="text" class="form-control" placeholder="idTipoTransaccion"  name="idTipoTransaccion" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">id de Cuenta: </span>
            <input type="text" class="form-control" placeholder="idCuenta"  name="idCuenta" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?ctrl=CtrlVoucher" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>