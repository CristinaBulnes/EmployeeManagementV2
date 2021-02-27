<?php

class NuevoModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    //CRUD operation
    public function insert($datos) {
        //Insert data to db
        $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDOS) VALUES (:matricula, :nombre, :apellido)');
        $query->execute(['matricula' => $datos['matricula'], 'nombre'=> $datos['nombre'], 'apellido' => $datos['apellido']]);
        echo 'Insert data';
    }
    public function delete() {

    }
    public function add () {

    }
}

?>