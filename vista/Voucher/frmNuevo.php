<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Voucher</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=CtrlUsuario&accion=guardarNuevo" method="post">
        id de Voucher: <input type="text" name="Id_voucher" value=""><br>
        Fecha: <input type="text" name="Fecha" value=""><br>
        Hora: <input type="text" name="Hora" value=""><br>
        Numero de Operacion: <input type="text" name="Numero_operacion" value=""><br>
        Importe de Transaccion: <input type="text" name="Importe_transaccion" value=""><br>
        Cargo Fijo: <input type="text" name="Cargo_fijo" value=""><br>
        Mora: <input type="text" name="Mora" value=""><br>
        Total de deuda: <input type="text" name="Total_deuda" value=""><br>
        Comision: <input type="text" name="Comision" value=""><br>
        Total a Pagar: <input type="text" name="Total_pagar" value=""><br>
        id de Empresa: <input type="text" name="idEmpresa" value=""><br>
        id de Agnte: <input type="text" name="idAgente" value=""><br>
        id Tipo de Transaccion: <input type="text" name="idTipoTransaccion" value=""><br>
        id de Cuenta: <input type="text" name="idCuenta" value=""><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlUsuario">Retornar</a></p>
</body>
</html>
