<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Transacción</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlTipoTransaccion&accion=guardarEditar" method="post">
        Id Tipo de Transacción: <input type="text" name="idTipoTransaccion" readonly
            value="<?=$TipoTransaccion['idTipoTransaccion']?>"><br>
        Transaccion: <input type="text" name="Transaccion"
            value="<?=$TipoTransaccion['Transaccion']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlTipoTransaccion">Retornar</a></p>
</body>
</html>