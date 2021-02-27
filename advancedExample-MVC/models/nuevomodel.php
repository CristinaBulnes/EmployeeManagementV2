<?php

class NuevoModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    //CRUD operation
    public function insert($datos) {
        //Insert data to db
        try {
            $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDOS) VALUES (:matricula, :nombre, :apellido)');
            $query->execute(['matricula' => $datos['matricula'], 'nombre'=> $datos['nombre'], 'apellido' => $datos['apellido']]);
            echo 'Insert data';
        } /* else {
            echo 'Error inserting data';
        } */
        catch (PDOException $e) {
            print_r('Error connection'.$e->getMessage());
            //throw $th;
        }
    }
    public function delete() {

    }
    public function add () {

    }
}

?>