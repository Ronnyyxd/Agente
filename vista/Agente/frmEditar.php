<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Agente</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAgente&accion=guardarEditar" method="post">
        Id de Agente : <input type="text" name="idAgente" readonly
            value="<?=$agente['idAgente']?>"><br>
        Nombre de Agente: <input type="text" name="NombreAgente"
            value="<?=$agente['NombreAgente']?>"><br>
        Dirección: <input type="text" name="direccion"
            value="<?=$agente['direccion']?>"><br>
        Código Equipo: <input type="text" name="codigoEquipo"
            value="<?=$agente['codigoEquipo']?>"> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlAgente">Retornar</a></p>
</body>
</html>