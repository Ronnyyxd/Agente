<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlUsuario&accion=guardarEditar" method="post">
        Id Usuario : <input type="text" name="Id_Usuario" readonly
            value="<?=$Usuario['Id_Usuario']?>"><br>
        DNI  : <input type="text" name="DNI"
            value="<?=$Usuario['DNI']?>"><br>
        Nombre Usuario: <input type="text" name="nombre" readonly
            value="<?=$Usuario['nombre']?>"><br>
        Id  TipoUsuario : <input type="text" name="idTipoUsuario"
            value="<?=$Usuario['idTipoUsuario']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlUsuario">Retornar</a></p>
</body>
</html>