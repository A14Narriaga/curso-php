<?php

class database {

    public $user;
    public $password;
    public $server;
    public $nameDB;
    public $connection;

    public function __construct() {
        $this->user = 'root';
        $this->password = '';
        $this->server = 'localhost';
        $this->nameDB = 'proyecto';     
    }
    
    public function getConnection() {
        $this->connection = null;
        try {
            $this->connection = new PDO("mysql:host=" . $this->server
                . ";dbname=" . $this->nameDB
                , $this->user, $this->password);
            $this->connection->exec("set names uft8");
            return $this->connection;
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
    }

    public function create($sql) {
        $this->connection->query('SET CHARACTER SET utf8');
        $query = $this->connection->prepare($sql);
        $count = $this->connection->exec($sql);
        return $count > 0 ? true : false;
    }

    public function read($sql) {
        $this->connection->query('SET CHARACTER SET utf8');
        $query = $this->connection->query($sql);
        $error = $this->connection->errorInfo();
        switch($error[0]) {
            case 0:     return $query->fetchAll(PDO::FETCH_OBJ);
            case 23000: return [null, "Registro duplicado"];
            default: return [null, $error[2]];
        }
    }

    public function update($sql) {
        $this->connection->query('SET CHARACTER SET utf8');
        $count = $this->connection->exec($sql);
        return $count > 0 ? true : false;
    }

    public function delete($sql) {
        $this->connection->query('SET CHARACTER SET utf8');
        $count = $this->connection->exec($sql);
        return $count > 0 ? true : false;
    }
}
?>