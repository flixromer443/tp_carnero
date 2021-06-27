<?php
//Modelo para la tabla alumnos
class Alumno{
    //Varible de conexión
    private $conexion;
    //atributos de la clase
    private $id;
    private $nombre;
    private $id_alumno;
    private $id_carrera;
    
    //Creamos el método constructor para conectar con la base de datos

    public function __CONSTRUCT(){
        $this->conexion = BasedeDatos::Conectar();
    }
    //Teniendo en cuenta el concepto de encapsulamiento creamos los métodos Get() y Set()

    //Viendo la versión del php podemos indicar el tipo de dato devuelto 7 y sup.

    public function get_id_alumno() : ? int{
        return $this->id_alumno;
    }

    public function set_id_alumno(int $id_alumno){
        $this->id_alumno=$id_alumnno;
    }

    public function get_apellido() : ? string{
        return $this->apellido;
    }

    public function set_apellido(string $ape){
        $this-> apellido=$ape;
    }

    public function get_nombre() : ? string{
        return $this->nombre;
    }

    public function set_nombre(string $nom){
        $this-> nombre=$nom;
    }

    public function get_dni() : ? int{
        return $this->dni;
    }

    public function set_dni(int $dni){
        $this->dni=$dni;
    }

    public function get_id_carrera() : ? int{
        return $this->id_carrera;
    }

    public function set_id_carrera(int $id_carrera){
        $this->id_carrera=$id_carrera;
    }

    //Método para listar los alumnos
    public function Mostrar(){

        try{
            $query=$this->conexion->prepare("SELECT c.id, c.nombre_completo, c.correo_electronico,
            c.direccion,m.municipio FROM clientes AS c INNER JOIN municipios as m ON 
            c.id_localidad=m.id");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e){
            die($e->getMessage());

        }
    }
    public function Mostrar_municipios(){

        try{
            $query=$this->conexion->prepare("SELECT * FROM municipios");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e){
            die($e->getMessage());

        }
    }
        //Para probar el método creado iremos al front controller
        /*recorar quitar de inicio.controlador.php 
          $base=BasedeDatos::Conectar();*/

    public function InsertarAlumno(Alumno $alum){

            try{
                $query = "INSERT INTO clientes(nombre_completo,correo_electronico,direccion, id_localidad) VALUES
                (?,NOW());";
                $this->conexion->prepare($query)->execute(array(
                    $alum->get_apellido(),
                    $alum->get_nombre(),
                    $alum->get_dni(),
                    $alum->get_id_carrera()
                ));
            }catch(exception $e){
                die($e->message());
            }
          }
     //Obtenemos los datos y los mostramos en el formulario     
          public function Obtener($id){

            try{
                $query=$this->conexion->prepare("SELECT * FROM clientes WHERE id=?;");
                $query->execute(array($id));
                //A diferencia del anterior método cambiamos a fetch ya que nos devulve un único registro.
                $dev=$query->fetch(PDO::FETCH_OBJ);
                //Y como lo que devolvemos es un objeto
                $alu=new Alumno();
                $alu->set_id_alumno($dev->id_alumno);    
                $alu->set_apellido($dev->apellido);
                $alu->set_nombre($dev->nombre);
                $alu->set_dni($dev->dni);
                $alu->set_id_carrera($dev->id_carrera);   
                
                return $alu;
    
            }catch(Exception $e){
                die($e->getMessage());
    
            }
        }
//Método para actualizar los datos del alumnno
        public function ActualizarAlumno(Alumno $alum){

            try{
                $query = "UPDATE alumno SET apellido=?, nombre=?, dni=? WHERE id_alumno=?;";
                $this->conexion->prepare($query)->execute(array(
                    $alum->get_apellido(),
                    $alum->get_nombre(),
                    $alum->get_dni(),
                    $alum->get_id_alumno()
                ));
            }catch(exception $e){
                die($e->message());
            }
          }

//Método para eliminar alumno

public function EliminarAlumno($id){

    try{
        $query = "DELETE FROM clientes WHERE id=?;";
        $this->conexion->prepare($query)->execute(array($id
        ));
    }catch(exception $e){
        die($e->message());
    }
  }
    
}