<?php
    require_once "modelos/alumno.php";

    class AlumnoControlador{
       private $modelo;

    //Creamos el constructor
       public function __CONSTRUCT(){
        $this->modelo=new Alumno();

       }
    //Creamos un método para la vista

    public function Inicio(){
    require_once "vistas/header.php";
    require_once "vistas/alumnos/homeAlumnos.php";

    }

    public function AgregarAlumno(){
      $leyendaMostrada="Agregar";
//En el caso de que no se pase un id creamos un nuevo objeto que estará vacío y permitira la carga del formulario
      $alu=new Alumno();
      
      if(isset($_GET['id'])){
         $alu=$this->modelo->Obtener($_GET['id']);
         $leyendaMostrada="Modificar";
      }
       require_once "vistas/header.php";
       require_once "vistas/alumnos/agregarAlumnos.php";

    }
//Método para cargar los datos en el formulario, desde aquí ejecutamos el método del modelo para actualizar dicho objeto
    public function Guardar(){
       $alum=new Alumno();
       $alum->set_id_alumno(intval($_POST['id_alumno']));
       $alum->set_apellido($_POST['apellido']);
       $alum->set_nombre($_POST['nombre']);
       $alum->set_dni($_POST['dni']);
       $alum->set_id_carrera($_POST['localidad']);
//Si por la URL recibimos un id se ejecuta el método ActualizarAlumno, donde el parámetro es el objeto $alum que vamos a actualizar
      if($alum->get_id_alumno() > 0)
      {
         $this->modelo->ActualizarAlumno($alum);
      }
//En el caso de que los datos ya estén cargados en el formulario y modificados, el método InsertarAlumno crea al nuevo $alum
      else 
      {
         $this->modelo->InsertarAlumno($alum);
      }

      header("location:?control=alumno");
       }
//Método que permite la eliminación del alumno mediante el método del modelo EliminarAlumno.
   public function BorrarAlumno(){
      $this->modelo->EliminarAlumno($_GET['id']);
      header("location:?control=alumno");
   }

}