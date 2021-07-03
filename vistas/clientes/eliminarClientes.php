<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title> Grafex S.A </title>
</head>
<body>
<div class="text-center mt-4 mb-4">    
    <h2 class="alert alert-dark" ><?=$leyendaMostrada?> cliente </h2>
    </div>
        <div class="container col-5">
        
              ¿Seguro desea eliminar al cliente?
              <br>
              <br>
              </div>
              <div class="container col-5">
              <a href="?control=cliente&accion=BorrarCliente&id=<?php echo $_GET["id"];?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
              <a href="?control=cliente"><button type="button" class="btn btn-info">Cancelar</button></a>
        </div>
                   
</body>
</html>