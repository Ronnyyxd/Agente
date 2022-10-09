<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Banco</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlBancos&accion=guardarEditar" method="post">
        Id de Banco : <input type="text" name="idBanco" readonly
            value="<?=$Bancos['idBanco']?>"><br>
        Nombre Banco : <input type="text" name="nombre"
            value="<?=$Bancos['nombre']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlBancos">Retornar</a></p>
</body>
</html>