<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Voucher</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=CtrlVoucher&accion=guardarEditar" method="post">
        Id Voucher: <input type="text" name="Id_voucher" readonly
            value="<?=$Voucher['Id_voucher']?>"><br>
        Fecha: <input type="text" name="Fecha"
            value="<?=$Voucher['Fecha']?>"><br>
        Hora: <input type="text" name="Hora"
            value="<?=$Voucher['Hora']?>"><br>
        N° Operación: <input type="text" name="Numero_operacion"
            value="<?=$Voucher['Numero_operacion']?>"> <br>
        Importe Transaccion: <input type="text" name="Importe_transaccion" readonly
            value="<?=$Voucher['Importe_transaccion']?>"><br>
        Cargo Fijo: <input type="text" name="Cargo_fijo"
            value="<?=$Voucher['Cargo_fijo']?>"><br>
        Mora: <input type="text" name="Mora"
            value="<?=$Voucher['Mora']?>"><br>
        Total Deuda: <input type="text" name="Total_deuda"
            value="<?=$Voucher['Total_deuda']?>"> <br>
        Comision: <input type="text" name="Comision"
            value="<?=$Voucher['Comision']?>"> <br>
        Total a Pagar: <input type="text" name="Total_pagar" readonly
            value="<?=$Voucher['Total_pagar']?>"><br>
        Id Empresa: <input type="text" name="idEmpresa"
            value="<?=$Voucher['idEmpresa']?>"><br>
        Id Agente: <input type="text" name="idAgente"
            value="<?=$Voucher['idAgente']?>"><br>
        Id Tipo transaccion: <input type="text" name="idTipoTransaccion"
            value="<?=$Voucher['idTipoTransaccion']?>"> <br>
        Id Cuenta: <input type="text" name="idCuenta"
            value="<?=$Voucher['idCuenta']?>"> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlVoucher">Retornar</a></p>
</body>
</html>
