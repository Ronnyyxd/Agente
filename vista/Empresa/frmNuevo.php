<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Empresa</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=CtrlEmpresa&accion=guardarNuevo" method="post">
        id de Empresa : <input type="text" name="idEmpresa" value=""><br>
        Giro del rubro: <input type="text" name="Giro_rubro" value=""><br>
        Numero de Cuenta: <input type="text" name="nroCuenta" value=""><br>
        Nombre: <input type="text" name="Nombre" value=""> <br>
        Codigo: <input type="text" name="codigo" value=""> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlEmpresa">Retornar</a></p>
</body>
</html>