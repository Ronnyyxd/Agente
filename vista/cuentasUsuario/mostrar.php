<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cuentas Usuario </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
    <a class="btn btn-primary" href="?ctrl=CtrlcuentasUsuario&accion=nuevo" role="button" >Nueva Cuenta</a>
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
        <a class="btn btn-primary" href="/Agente2"role="button">Atrás</a>
    </table>
</body>

</html>