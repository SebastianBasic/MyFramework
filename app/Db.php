<?php

namespace app;

use PDO, mysqli;

class Db
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "test";

    public function connectDb () {
        $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->user, $this->pass);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}