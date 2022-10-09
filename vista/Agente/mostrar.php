<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agente </title>
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

    <a class="btn btn-primary" href="?ctrl=CtrlAgente&accion=nuevo" role="button">Nuevo Agente</a>
    <table>
        <tr>
            <th>Id de Agente</th>
            <th>Nombre de Agente</th>
            <th>Dirección</th>
            <th>Código Equipo</th>
        </tr> <?php foreach ($Agente as $c) { ?> <tr>
            <td><?=$c['idAgente']?></td>
            <td><?=$c['NombreAgente']?></td>
            <td><?=$c['direccion']?></td>
            <td><?=$c['codigoEquipo']?></td>
            <td> <a href="?ctrl=CtrlAgente&accion=editar&id=<?=$c['idAgente']?>">Editar</a> / <a
            href="?ctrl=CtrlAgente&accion=eliminar&id=<?=$c['idAgente']?>">Eliminar</a> </td>
        </tr> <?php } ?>
     
        <a class="btn btn-primary" href="/Agente2" role="button">Atras</a>
    </table>
</body>

</html>