<?php

class Config {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "lionheart_db";
    public $pdo = null;

    public function conn() {

        try {
            $this->pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbName}", $this->username, $this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        return $this->pdo;
    }

}


?>