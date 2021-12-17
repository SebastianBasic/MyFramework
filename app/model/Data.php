<?php

namespace app\model;

use app\Db;

class Data extends Db
{
    public function getAllRecords () {
        return $this->connectDb()->query("SELECT * FROM data");     
    }

    public function insertNewRecord ($name, $location) {
        $stmt = $this->connectDb()->prepare("INSERT INTO data(name, location) VALUES (?,?)");

        $stmt->execute([$name, $location]);
    }

    public function deleteRecord ($id) {
        $stmt = $this->connectDb()->prepare("DELETE FROM data WHERE id = ?");

        $stmt->execute([$id]);
    }
}