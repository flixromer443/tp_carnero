<?php
    require_once "modelos/cliente.php";

    class ClienteControlador{
       private $modelo;

    //Creamos el constructor
       public function __CONSTRUCT(){
        $this->modelo=new Cliente();

       }
    //Creamos un método para la vista

    public function Inicio(){
    require_once "vistas/header.php";
    require_once "vistas/clientes/homeClientes.php";

    }

    public function AgregarCliente(){
      $leyendaMostrada="Agregar";
//En el caso de que no se pase un id creamos un nuevo objeto que estará vacío y permitira la carga del formulario
      $cliente=new Cliente();
      
      if(isset($_GET['id'])){
         $cliente=$this->modelo->Obtener($_GET['id']);
         $leyendaMostrada="Modificar";
      }
       require_once "vistas/header.php";
       require_once "vistas/clientes/agregarClientes.php";

    }
//Método para cargar los datos en el formulario, desde aquí ejecutamos el método del modelo para actualizar dicho objeto
    public function Guardar(){
       $cliente=new Cliente();
       $cliente->set_id_cliente(intval($_POST['id_cliente']));
       $cliente->set_apellido($_POST['apellido']);
       $cliente->set_nombre($_POST['nombre']);
       $cliente->set_direccion($_POST['direccion']);
       $cliente->set_id_municipio($_POST['id_municipio']);
       $cliente->set_correo_electronico($_POST['correo_electronico']);
//Si por la URL recibimos un id se ejecuta el método Actualizarclientes, donde el parámetro es el objeto $cliente que vamos a actualizar
      if($cliente->get_id_cliente() > 0)
      {
         $this->modelo->ActualizarCliente($cliente); 
      }
//En el caso de que los datos ya estén cargados en el formulario y modificados, el método Insertarclientes crea al nuevo $cliente
      else 
      {
         $this->modelo->InsertarCliente($cliente);
      }

      header("location:?control=cliente");
       }
//Método que permite la eliminación del clientes mediante el método del modelo Eliminarclientes.
   public function BorrarCliente(){
      $this->modelo->EliminarCliente($_GET['id']);
      header("location:?control=cliente");
   }

   // funcion pre eliminación 
   public function PreEliminarCliente(){
      $leyendaMostrada="Eliminar";
      require_once "vistas/header.php";
      require_once "vistas/clientes/eliminarClientes.php";

   }
}