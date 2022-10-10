<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Voucher </title>
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
    <a class="btn btn-primary" href="?ctrl=CtrlVoucher&accion=nuevo"role="button">Nuevo Voucher</a>
    <table>
        <tr>
            <th>Id Voucher:</th>
            <th>Fecha</th>
            <th>Hora:</th>
            <th>N° de Operacion</th>
            <th>Importe_transaccion:</th>
            <th>Cargo fijo</th>
            <th>Mora :</th>
            <th>Total deuda</th>
            <th>Comision:</th>
            <th>Total a pagar</th>
            <th>Id Empresa:</th>
            <th>Id  Agente</th>
            <th>Id Tipo Transaccion:</th>
            <th>Id Cuenta</th>
        </tr> <?php 
        if (is_array($Voucher))
        foreach ($Voucher as $c) { ?> <tr>
            <td><?=$c['Id_voucher']?></td>
            <td><?=$c['Fecha']?></td>
            <td><?=$c['Hora']?></td>
            <td><?=$c['Numero_operacion']?></td>
            <td><?=$c['Importe_transaccion']?></td>
            <td><?=$c['Cargo_fijo']?></td>
            <td><?=$c['Mora']?></td>
            <td><?=$c['Total_deuda']?></td>
            <td><?=$c['Comision']?></td>
            <td><?=$c['Total_pagar']?></td>
            <td><?=$c['idEmpresa']?></td>
            <td><?=$c['idAgente']?></td>
            <td><?=$c['idTipoTransaccion']?></td>
            <td><?=$c['idCuenta']?></td>
            <td> <a href="?ctrl=CtrlVoucher&accion=editar&id=<?=$c['Id_voucher']?>">Editar</a> / <a
            href="?ctrl=CtrlVoucher&accion=eliminar&id=<?=$c['Id_voucher']?>">Eliminar</a> </td>
        </tr> <?php } ?>
        <a class="btn btn-primary" href="/Agente2"role="button">Atrás</a>
    </table>
</body>

</html>