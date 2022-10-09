<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo TipoUsuario</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=CtrlTipoUsuario&accion=guardarNuevo" method="post">
        id de Tipo Usuario : <input type="text" name="idTipoUsuario" value=""><br>
        Tipo: <input type="text" name="tipo" value=""><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlTipoUsuario">Retornar</a></p>
</body>
</html>