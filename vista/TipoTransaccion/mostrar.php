<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tipo de Transaccion</title>
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
    <a href="?ctrl=CtrlTipoTransaccion&accion=nuevo">Nueva Transaccion</a>
    <table>
        <tr>
            <th>Id Tipo Transaccion:</th>
            <th>Transaccion</th>
        </tr> <?php
            if (is_array($TipoTransaccion))
            foreach ($TipoTransaccion as $c) { ?> <tr>
            <td><?=$c['idTipoTransaccion']?></td>
            <td><?=$c['Transaccion']?></td>
            <td> <a href="?ctrl=CtrlTipoTransaccion&accion=editar&id=<?=$c['idTipoTransaccion']?>">Editar</a> / <a
            href="?ctrl=CtrlTipoTransaccion&accion=eliminar&id=<?=$c['idTipoTransaccion']?>">Eliminar</a> </td>
        </tr> <?php } ?>
        <a href="/Agente2">Atrás</a>
    </table>
</body>

</html>