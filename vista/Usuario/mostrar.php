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
    <a href="?ctrl=CtrlUsuario&accion=nuevo">Nuevo Tipo de Usuario</a>
    <table>
        <tr>
            <th>Id Usuario:</th>
            <th>DNI</th>
            <th>Nombre Usuario:</th>
            <th>Id  TipoUsuario</th>
        </tr> <?php
            if (is_array($Usuario))
            foreach ($Usuario as $c) { ?> <tr>
            <td><?=$c['Id_Usuario']?></td>
            <td><?=$c['DNI']?></td>
            <td><?=$c['nombre']?></td>
            <td><?=$c['idTipoUsuario']?></td>
            <td> <a href="?ctrl=CtrlUsuario&accion=editar&id=<?=$c['Id_Usuario']?>">Editar</a> / <a
            href="?ctrl=CtrlUsuario&accion=eliminar&id=<?=$c['Id_Usuario']?>">Eliminar</a> </td>
        </tr> <?php } ?>
        <a href="/Agente">Atrás</a>
    </table>
</body>

</html>