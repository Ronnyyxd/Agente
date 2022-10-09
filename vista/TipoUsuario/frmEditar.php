<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Usuario</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=CtrlTipoUsuario&accion=guardarEditar" method="post">
        Id TipoUsuario: <input type="text" name="idTipoUsuario" readonly
            value="<?=$TipoUsuario['idTipoUsuario']?>"><br>
        Tipo: <input type="text" name="tipo"
            value="<?=$TipoUsuario['tipo']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlTipoUsuario">Retornar</a></p>
</body>
</html>