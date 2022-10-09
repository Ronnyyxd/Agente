<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Agente</title>
    
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAgente&accion=guardarNuevo" method="post">
        id de Agente : <input type="text" name="idAgente" value=""><br>
        
            <label for="inputPassword" class="col-sm-2 col-form-label">Nombre de Agente:</label>
            
            <input type="text" name="NombreAgente" class="form-control"  value="" id="inputPassword">
        
<br>
        Dirección: <input type="text" name="direccion" value=""><br>
        Código Equipo: <input type="text" name="codigoEquipo" value=""> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?ctrl=CtrlAgente">Retornar</a></p>
</body>
</html>
