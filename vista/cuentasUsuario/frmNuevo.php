<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Cuenta</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlcuentasUsuario&accion=guardarNuevo" method="post">
        id de Cuentas de Usuario : <input type="text" name="idCuenta" value=""><br>
        Numero de usuario: <input type="text" name="numero" value=""><br>
        Saldo: <input type="text" name="saldo" value=""><br>
        id_usuario: <input type="text" name="Id_Usuario" value=""> <br>
        idBanco: <input type="text" name="idBanco" value=""> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlcuentasUsuario">Retornar</a></p>
</body>
</html>
