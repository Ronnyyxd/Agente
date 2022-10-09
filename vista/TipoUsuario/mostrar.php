<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tipo Usuario </title>
    <style>
        table,th,td  {
            border : 0.05vw solid black;
            border-collapse: collapse;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <h1><?=$encabezado?></h1>
    <a href="?ctrl=CtrlTipoUsuario&accion=nuevo">Nuevo Tipo de Usuario</a>
    <table>
        <tr>
            <th>Id TipoUsuario:</th>
            <th>Tipo</th>
        </tr> <?php
            if(is_array($TipoUsuario)) 
            foreach ($TipoUsuario as $c) { ?> <tr>
            <td><?=$c['idTipoUsuario']?></td>
            <td><?=$c['tipo']?></td>
            <td> <a href="?ctrl=CtrlTipoUsuario&accion=editar&id=<?=$c['idTipoUsuario']?>">Editar</a> / <a
            href="?ctrl=CtrlTipoUsuario&accion=eliminar&id=<?=$c['idTipoUsuario']?>">Eliminar</a> </td>
        </tr> <?php } ?>
        <a href="/Agente2">Atrás</a>
    </table>
</body>

</html>