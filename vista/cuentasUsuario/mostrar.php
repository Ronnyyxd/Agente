<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cuentas Usuario </title>
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
    <a href="?ctrl=CtrlcuentasUsuario&accion=nuevo">Nueva Cuenta</a>
    <table>
        <tr>
            <th>Id CuentaUsuario:</th>
            <th>Número de Cuenta</th>
            <th>Saldo</th>
            <th>Id Usuario</th>
            <th>Id Banco</th>
        </tr> <?php 
            if (is_array($cuentasUsuario))
            foreach ($cuentasUsuario as $c) { ?> <tr>
            <td><?=$c['idCuenta']?></td>
            <td><?=$c['numero']?></td>
            <td><?=$c['saldo']?></td>
            <td><?=$c['Id_Usuario']?></td>
            <td><?=$c['idBanco']?></td>
            <td> <a href="?ctrl=CtrlcuentasUsuario&accion=editar&id=<?=$c['idCuenta']?>">Editar</a> / <a
            href="?ctrl=CtrlcuentasUsuario&accion=eliminar&id=<?=$c['idCuenta']?>">Eliminar</a> </td>
        </tr> <?php } ?>
        <a href="/Agente2">Atrás</a>
    </table>
</body>

</html>