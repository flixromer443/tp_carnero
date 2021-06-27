<?php

require_once "modelos/alumno.php";

class InicioControlador{
    //Este modelo lo dejamos prepararo, luego vemos como lo vamos a usar.
    private $modelo;
    //Dejamos ya un objeto alumno preparado
    public function __CONSTRUCT(){
        $this -> modelo = new Alumno();
    }
//Creamos el método inicio y lo prbamos desde el localhos.

    public function Inicio(){

        //$base=BasedeDatos::Conectar();
        require_once "vistas/header.php";
        //echo "Bienvenidos al Inicio de nuestro sitio, el controlador se acaba de instanciar";
        require_once "vistas/alumnos/homeAlumnos.php";      
    }


}