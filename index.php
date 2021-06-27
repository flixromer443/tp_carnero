<?php
//Vinculamos con la base de datos
require_once "modelos/conexion.php";
//require_once "modelos/alumno.php";

if (!isset($_GET['control']))
{
//Ahora lo que hacemos es llamar a un controlador esto es en el caso de que no se le pase nada por URL,
//Es decir que no se pasa ningún controlador
require_once "controladores/inicio.controlador.php";
//Luego lo instanciamos0
$controlador= new InicioControlador();
//Luego utilizamos call_user_func que llama al método del objeto controlador
//$controlador es el objeto y "incio" es el método del objeto
call_user_func(array($controlador,"Inicio"));

}
else
{
// Y en el caso de que se realice una petición de un controlador
$controlador = $_GET['control'];
/*Todos los archivos tendran esa forma, es decir el nombre que le pasemos por URL
y .el nnonbre controlador como tal. Todos se llamrán así*/
require_once "controladores/$controlador.controlador.php";
/*ahora instanciamos y como todas las clases tendrán la primer letra en mayúsculas para no tener 
problemas utilizamos ucwords()*/

$controlador = ucwords($controlador)."Controlador";

/*Primero se toma el valor que se le esta pasando en la línea anterior y luego lo instanciamos
La idea es ir reciclando el valor en cada línea*/
$controlador = new $controlador;
/*Ahora vamos a tomar otro valor, que también será pasado por URL que es el valor del 
método y vemos primero si está seteado*/
$metodo = isset($_GET['accion']) ? $_GET['accion']:"Inicio";
call_user_func(array($controlador,$metodo));

/*Esto que acabamos de hacer es la estructura básica del front controller que nos permitirá instanciar 
cualquier elemento */
}
?>