<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Banco </title>
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
    <a class="btn btn-primary" href="?ctrl=CtrlBancos&accion=nuevo" role="button">Nuevo Banco</a>
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
        <a class="btn btn-primary" href="/Agente2" role="button">Atras</a>
    </table>
</body>

</html>