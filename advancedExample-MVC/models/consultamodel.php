<?php
include_once 'models/alumno.php';
class ConsultaModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    //CRUD operation
    public function get() {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM alumnos");

            while ($row = $query->fetch()) {
                $item = new Alumno ();
                $item->matricula = $row ['matricula'];
                $item->nombre    = $row ['nombre'];
                $item->apellido  = $row ['apellidos'];
                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function getById($id) {
        $item = new Alumno ();
        $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");
        try {
            $query->execute (['matricula' => $id]);
            while ($row = $query->fetch()) {
                $item->matricula = $row ['matricula'];
                $item->nombre    = $row ['nombre'];
                $item->apellido  = $row ['apellidos'];
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update ($item) {
        $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos WHERE matricula = :matricula");
        try {
            $query->execute ([
                'matricula' => $item['matricula'],
                'nombre' => $item['nombre'],
                'apellidos' => $item['apellido'],
                ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }

    }
}

?>