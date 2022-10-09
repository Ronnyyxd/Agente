<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Banco </title>
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
    <a href="?ctrl=CtrlBancos&accion=nuevo">Nuevo Banco</a>
    <table>
        <tr>
            <th>Id de Banco</th>
            <th>Nombre de Banco</th>           
        </tr> <?php
            if (is_array($Bancos))
            foreach ($Bancos as $c) { ?> <tr>
            <td><?=$c['idBanco']?></td>
            <td><?=$c['nombre']?></td>
            <td> <a href="?ctrl=CtrlBancos&accion=editar&id=<?=$c['idBanco']?>">Editar</a> / <a
            href="?ctrl=CtrlBancos&accion=eliminar&id=<?=$c['idBanco']?>">Eliminar</a> </td>
        </tr> <?php } ?>
        <a href="/Agente">Atrás</a>
    </table>
</body>

</html>