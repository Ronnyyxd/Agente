<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo TipoTransaccion</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlTipoTransaccion&accion=guardarNuevo" method="post">
        id de Tipo Transaccion : <input type="text" name="idTipoTransaccion" value=""><br>
        Transaccion: <input type="text" name="Transaccion" value=""><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlTipoTransaccion">Retornar</a></p>
</body>
</html>