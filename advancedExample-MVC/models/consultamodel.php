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
}

?>