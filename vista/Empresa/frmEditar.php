<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlEmpresa&accion=guardarEditar" method="post">
        Id Empresa: <input type="text" name="idEmpresa" readonly
            value="<?=$Empresa['idEmpresa']?>"><br>
        Giro Rubro: <input type="text" name="Giro_rubro"
            value="<?=$Empresa['Giro_rubro']?>"><br>
        N° de Cuenta : <input type="text" name="nroCuenta"
            value="<?=$Empresa['nroCuenta']?>"><br>
        Nombre Empresa: <input type="text" name="Nombre"
            value="<?=$Empresa['Nombre']?>"><br>
        Codigo Empresa: <input type="text" name="codigo"
            value="<?=$Empresa['codigo']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlEmpresa">Retornar</a></p>
</body>
</html>