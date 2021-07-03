<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Agregar Cliente</title>
</head>
<body style="background-color:#0f413eab;">
<div class="text-center mt-4 mb-4">    
  
    </div>
        <div class="container col-5" style="background-color: grey; border-radius:20px">
    <h4 class="alert alert-secondary" style="border-radius: 20px;"><?=$leyendaMostrada?> cliente </h4>

        <!--Formulario de ingreso, observar que es el mismo que utilizamos en la página de contacto-->
        <form method="POST" action="?control=cliente&accion=Guardar">
            <div class="form-group">
            <input type="hidden" name="id_cliente" value="<?=$cliente->get_id_cliente();?>">
            </div>
                <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" required class="form-control"name="apellido" value="<?=$cliente->get_apellido();?>">
              </div>
            <div class="form-group" >
              <label for="nombre">Nombre</label>
              <input type="text" required  class="form-control" name="nombre" value="<?=$cliente->get_nombre();?>">
            </div>
            <div class="form-group" >
              <label for="direccion">Direcci&oacute;n</label>
              <input type="text" required class="form-control" name="direccion" value="<?=$cliente->get_direccion();?>">
            </div>
            <div class="form-group" >
              <label for="direccion">Correo electronico</label>
              <input type="email" required pattern="/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}
  [a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
" class="form-control"  name="correo_electronico" value="<?=$cliente->get_correo_electronico();?>">
            </div>
            
            <div class="form-group" >
              <label for="especialidad">Municipio</label>
              
              <?php
              if($cliente->get_id_municipio() > 0){
              echo '<input type="text" class="form-control" name="id_municipio" min="1" max="6" value="'.$cliente->get_id_municipio().'">';
              }
              else{
              echo '<Select name="id_municipio" class="form-control" >
                         
                      <option value="1">1. Merlo</option>
                      <option value="2">2. Moron</option>
                      <option value="3">3. Moreno</option>
                      <option value="4">4. Ituzaigo</option>
                      <option value="5">5. 3 de Febrero</option>
                      <option value="6">6. Matanza</option>
                    </Select>';
              }
              ?>
              </div>
            
            <br>
            <button type="submit" class="btn btn-success">Insertar</button>
            <a href="index.php"><button type="button" class="btn btn-primary">Volver</button></
          </form>
        </div>
                   
</body>
</html>