<?php
//Main controller
class Consulta extends Controller{

    function __construct () {
        parent::__construct();
        $this->view->datos = [];
    }

    function render () {
        //@@ $this->model->get() --> call this controller's model and its method get 
        $alumnos = $this->model->get();
        $this->view->datos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno($param = null){
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);
        //Make sure primary key is't modify
        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula;
        $this->view->mensaje = "";
        $this->view->alumno = $alumno;
        $this->view->render('consulta/detalle');

    }

    function actualizarAlumno () {
        // Get primary key data by session variable
        session_start();
        $matricula = $_SESSION['id_verAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        unset($_SESSION['id_verAlumno']);

        if($this->model->update(['matricula'=>$matricula, 'nombre'=>$nombre, 'apellido'=>$apellido])) {
            //try from update return true
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        }else {
            $this->view->mensaje = "No se pudo actualizar el alumno";
        }
        $this->view->render('consulta/detalle');

    }

    function eliminarAlumno ($param = null) {
    $matricula = $param[0];
        if($this->model->delete($matricula)) {
            $this->view->mensaje = "Alumno eliminado correctamente";
        }else {
            $this->view->mensaje = "No se pudo eliminar el alumno";
        }
        $this->render(); //render principal view
    }
}
?>