<?php

use app\control\DataController;

route ('/', function () {

});

route ('/data/create', function () {
    $data = new DataController();

    $data->create();

    header("location: /");
}, "create");

route ('/data/edit', function ($id = null) {
    if ($id) {
        $data = new DataController();

        $data->edit($id);

        header("location: /");
    }else{
        echo "Nema id!";
        die();
    }
});

route ('/data/delete', function ($id = null) {
    if ($id) {
        $data = new DataController();

        $data->destroy($id);

        header("location: /");
    }else{
        echo "Nema id!";
        die();
    }
}, "delete");

dispatch($_SERVER["REQUEST_URI"]);