<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cuenta</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlcuentasUsuario&accion=guardarEditar" method="post">
        Id CuentaUsuario: <input type="text" name="idCuenta" readonly
            value="<?=$cuentasUsuario['idCuenta']?>"><br>
        Número de Cuenta: <input type="text" name="numero"
            value="<?=$cuentasUsuario['numero']?>"><br>
        Saldo : <input type="text" name="saldo"
            value="<?=$cuentasUsuario['saldo']?>"><br>
        Id Usuario: <input type="text" name="Id_Usuario"
            value="<?=$cuentasUsuario['Id_Usuario']?>"><br>
        Id Banco: <input type="text" name="idBanco"
            value="<?=$cuentasUsuario['idBanco']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlcuentasUsuario">Retornar</a></p>
</body>
</html>
