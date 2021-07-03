<?php
//Modelo para la tabla clientess
class Cliente{
    //Varible de conexión
    private $conexion;
    //atributos de la clase
    private $id_cliente;
    private $apellido;
    private $nombre;
    private $direccion;
    private $id_municipio;
    private $correo_electronico;
    //Creamos el método constructor para conectar con la base de datos

    public function __CONSTRUCT(){
        $this->conexion = BasedeDatos::Conectar();
    }
    //Teniendo en cuenta el concepto de encapsulamiento creamos los métodos Get() y Set()

    //Viendo la versión del php podemos indicar el tipo de dato devuelto 7 y sup.

    public function get_id_cliente() : ? int{
        return $this->id_cliente;
    }

    public function set_id_cliente(int $id){
        $this->id_cliente=$id;
    }

    public function get_apellido() : ? string{
        return $this->apellido;
    }

    public function set_apellido(string $ape){
        $this->apellido=$ape;
    }

    public function get_nombre() : ? string{
        return $this->nombre;
    }

    public function set_nombre(string $nom){
        $this->nombre=$nom;
    }

    public function get_direccion() : ? string{
        return $this->direccion;
    }

    public function set_direccion(string $direccion){
        $this->direccion=$direccion;
    }

    public function get_id_municipio() : ? int{
        return $this->id_municipio;
    }

    public function set_id_municipio(int $id_mun){
        $this->id_municipio=$id_mun;
    }

    public function get_correo_electronico() : ? string{
        return $this->correo_electronico;
    }

    public function set_correo_electronico(string $correo_electronico){
        $this->correo_electronico=$correo_electronico;
    }

    //Método para listar los clientess
    public function Mostrar(){

        try{
            $query=$this->conexion->prepare("SELECT clientes.id_cliente, clientes.apellido,clientes.correo_electronico, clientes.nombre, clientes.direccion,
            municipios.municipio FROM clientes INNER JOIN municipios ON clientes.id_municipio = municipios.id_municipio WHERE clientes.activo=1 ORDER BY clientes.apellido;");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e){
            die($e->getMessage());

        }
    }
        //Para probar el método creado iremos al front controller
        /*recorar quitar de inicio.controlador.php 
          $base=BasedeDatos::Conectar();*/

    public function InsertarCliente(Cliente $cliente){

            try{
                $query = "INSERT INTO clientes(apellido, nombre, direccion, id_municipio,correo_electronico) VALUES
                (?,?,?,?,?);";
                $this->conexion->prepare($query)->execute(array(
                    $cliente->get_apellido(),
                    $cliente->get_nombre(),
                    $cliente->get_direccion(),
                    $cliente->get_id_municipio(),
                    $cliente->get_correo_electronico()
                ));
            }catch(exception $e){
                die($e->message());
            }
          }
     //Obtenemos los datos y los mostramos en el formulario     
    public function Obtener($id){

        try{
            $query=$this->conexion->prepare("SELECT * FROM clientes WHERE id_cliente=?;");
            $query->execute(array($id));
            //A diferencia del anterior método cambiamos a fetch ya que nos devulve un único registro.
            $dev=$query->fetch(PDO::FETCH_OBJ);
            //Y como lo que devolvemos es un objeto
            $cliente=new Cliente();
            $cliente->set_id_cliente($dev->id_cliente);    
            $cliente->set_apellido($dev->apellido);
            $cliente->set_nombre($dev->nombre);
            $cliente->set_direccion($dev->direccion);
            $cliente->set_id_municipio($dev->id_municipio);   
            $cliente->set_correo_electronico($dev->correo_electronico);
            return $cliente;

        }catch(Exception $e){
            die($e->getMessage());

        }
    }
//Método para actualizar los datos del alumnno
    public function ActualizarCliente(Cliente $cliente){

        try{
            $query = "UPDATE clientes SET apellido=?, nombre=?, direccion=? , correo_electronico=? WHERE id_cliente=?;";
            $this->conexion->prepare($query)->execute(array(
                $cliente->get_apellido(),
                $cliente->get_nombre(),
                $cliente->get_direccion(),
                $cliente->get_correo_electronico(),
                $cliente->get_id_cliente()
                
            ));
        }catch(exception $e){
            die($e->message());
        }
    }

//Método para eliminar clientes

public function EliminarCliente($id){

    try{
        $query = "UPDATE clientes SET activo=? WHERE id_cliente=?;";
        $this->conexion->prepare($query)->execute(array(0,$id
        ));
    }catch(exception $e){
        die($e->message());
    }
  }
    
}