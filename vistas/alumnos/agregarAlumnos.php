<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Agregar Alumno</title>
</head>
<body>
<div class="text-center mt-4 mb-4">    
    <h2 class="alert alert-dark" ><?=$leyendaMostrada?> alumno</h2>
    </div>
        <div class="container col-5">
        <!--Formulario de ingreso, observar que es el mismo que utilizamos en la página de contacto-->
        <form method="POST" action="?control=alumno&accion=Guardar">
            <div class="form-group">
            <input type="hidden" name="id_alumno" value="<?=$alu->get_id_alumno();?>">
            </div>
                <div class="form-group">
                <label for="apellido">Nombre completo</label>
                <input type="text" required class="form-control" name="apellido" value="<?=$alu->get_apellido();?>">
              </div>
            <div class="form-group" >
              <label for="nombre">Correo electronico</label>
              <input type="text" required class="form-control" name="nombre" value="<?=$alu->get_nombre();?>">
            </div>
            <div class="form-group" >
              <label for="dni">Calle/altura</label>
              <input type="number" required class="form-control" name="dni" value="<?=$alu->get_dni();?>">
            </div>
            
            <div class="form-group" >
              <label for="especialidad">Localidad</label>
              <select class="form-control" name="localidad">
              
              <?php
                foreach($this->modelo->Mostrar_municipios() as $salida){
                    ?>
                    <option value="<?php echo  $salida->id;?>"> <?php echo $salida->municipio; ?> </option>
               <?php }?>
              </select>

              </div>
            <!--

              if($alu->get_id_carrera() > 0){
              echo '<input type="text" class="form-control" name="id_carrera" value="'.$alu->get_id_carrera();'';echo '">';
              }
              else{
              echo '<Select name="id_carrera" class="form-control" >
                         
                      <option value="1">1. Tecnicatura Superior en Análisis de Sistemas</option>
                      <option value="2">2. Tecnicatura Superior en Administración Contable</option>
                      <option value="3">3. Tecnicatura Superior en Gestión Ambiental y Salud</option>
                      <option value="4">4. Tecnólogo en Salud con Especialidad en Análisis Clínicos</option>
                    </Select>';
              }

            -->
            <br>
            <button type="submit" class="btn btn-success">Insertar</button>
            <a href="index.php"><button type="button" class="btn btn-primary">Volver</button></
          </form>
        </div>
                   
</body>
</html>