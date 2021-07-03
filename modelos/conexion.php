<?php

class BasedeDatos{ 
    const nombre_db = "clientes";
    const servidor = "localhost";
    const usuario = "root";
    const pass = "";
   
/*creamos un método público y estático para poder utilizarlo sin necesidad
    de instanciar la clase BasedeDatos*/
public static function Conectar(){
//self hace referencia a si mismo a base de datos.
    try{
        $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::nombre_db.";charset=utf8",
        self::usuario,self::pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //Si todo está OK devolvemos el objeto de conexión    
        return $conexion;
    }catch(PDOException $e)
        {
            return "Error". $e->getMessage();
        }
    }
}