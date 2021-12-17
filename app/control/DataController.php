<?php

namespace app\control;

use app\model\Data;

class DataController 
{
    public function index () {
        $data = new Data();
        return $data->getAllRecords();
    }

    public function create () {
        $name = $_POST['name'];
        $location = $_POST['location'];

        $data = new Data();

        $data->insertNewRecord($name, $location);
    }

    public function edit ($id) {
        
    }

    public function update ($id) {

    }

    public function destroy ($id) {
        $data = new Data();

        $data->deleteRecord($id);
    }
}