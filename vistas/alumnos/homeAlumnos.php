<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Las siguintes dos líneas son del framework bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>CRUD en php con mysql</title>
</head>
<body>
    <h2 class="text-center mt-5 mb-5 alert alert-dark">Clientes</h2>
 <!--Se muestran en los títulos de la tabla(html) los campos de la tabla de la BD.-->
    <table class="m-auto table table-striped col-10 ">
        <tr>
            <th>Id</th> <!--El código es el id_alumno-->
            <th>Nombre de usuario </th>
            <th>Correo electronico</th>
            <th>Calle/altura</th>
            <th>Localidad</th> <!--Aquí se genera la relación, observar que se muestra 
            la descripción de la carrar y no el id_carrera-->
            <th colspan="2">Acción</th>
            </tr>
        <?php
        /*para cada elemento del método Mostrar()*/
        foreach($this->modelo->Mostrar() as $salida) //Con este foreach se imprimen todos los registros de la tabla
        {
            ?>
            <tr>
            <td><?php echo $salida->id;?></td>
            <td><?php echo $salida->nombre_completo;?></td>
            <td><?php echo $salida->correo_electronico;?></td>
            <td><?php echo $salida->direccion;?></td>
            <td><?php echo $salida->municipio;?></td> <!--Aqui la relación-->
            <td><a href="?control=alumno&accion=AgregarAlumno&id=<?php echo $salida->id;?>"><button type="button" class="btn btn-info">Editar</button></a></td>
            <td><a href="?control=alumno&accion=BorrarAlumno&id=<?php echo $salida->id;?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
            </tr>
        <?php

        }
        ?>
</table>
   
</body>
</html>