<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlEmpresa&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">id de Empresa: </span>
            <input type="text" class="form-control" placeholder="idEmpresa:"  name="idEmpresa" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Giro del rubro: </span>
            <input type="text" class="form-control" placeholder="Giro_rubro"  name="Giro_rubro" value="">
            <div class="input-group mb-3">
            <span class="input-group-text">Numero de Cuenta: </span>
            <input type="text" class="form-control" placeholder="nroCuenta:"  name="nroCuenta" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Nombre Empresa: </span>
            <input type="text" class="form-control" placeholder="Nombre"  name="Nombre" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Codigo Empresa: </span>
            <input type="text" class="form-control" placeholder="codigo"  name="codigo" value="">
        <div class="input-group mb-3">

            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?ctrl=CtrlEmpresa" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>