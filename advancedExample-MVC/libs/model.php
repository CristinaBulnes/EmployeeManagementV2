<?php
//Model base class
class Model {
    function __construct () {
        $this->db = new Database ();
    }
}
?>