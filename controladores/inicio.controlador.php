<?php

require_once "modelos/cliente.php";

class InicioControlador{
    //Este modelo lo dejamos prepararo, luego vemos como lo vamos a usar.
    private $modelo;
    //Dejamos ya un objeto clientes preparado
    public function __CONSTRUCT(){
        $this -> modelo = new Cliente();
    }
//Creamos el método inicio y lo prbamos desde el localhos.

    public function Inicio(){

        //$base=BasedeDatos::Conectar();
        require_once "vistas/header.php";
        //echo "Bienvenidos al Inicio de nuestro sitio, el controlador se acaba de instanciar";
        require_once "vistas/clientes/homeClientes.php";      
    }


}