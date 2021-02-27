<?php
//Define database config

class Database {
    private $host;
    private $bd;
    private $user;
    private $password;
    private $charset;

    public function __construct () {
        $this->host     = constant('HOST');     //
        $this->db       = constant('BD');       //
        $this->user     = constant('USER');     // 
        $this->password = constant('PASSWORD'); //
        $this->charset  = constant('CHARSET');  //
    }

    function connect() { 
        try {
            $connection = "mysql:host=".$this->host.";dbname=".$this->bd.";charset=".$this->charset; //DSN data source name -> is going to describe what exact type of database we're going to using, localhost and dbname
            $options = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];
            $pdo = new PDO ($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: '. $e->getMessage());
        }
    }

}
?>