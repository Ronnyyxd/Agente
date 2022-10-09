<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlUsuario&accion=guardarNuevo" method="post">
        id de Usuario: <input type="text" name="Id_Usuario" value=""><br>
        DNI: <input type="text" name="DNI" value=""><br>
        nombre: <input type="text" name="nombre" value=""><br>
        id Tipo Usuario: <input type="text" name="idTipoUsuario" value=""><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlUsuario">Retornar</a></p>
</body>
</html>