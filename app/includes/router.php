<?php

$routes = [];

function route ($action, $callback) {
    global $routes;

    $action = str_replace(["/", "WC"], "", $action);

    $routes[$action] = $callback;
}

function dispatch ($action) {
    global $routes;

    if(preg_match("/(?<=WC)(.*)(?=WC)/", $action, $match)){
        $id = $match[0];

        $action = str_replace(["/", "WC", $id], "", $action);

        $callback = $routes[$action];

        echo call_user_func($callback, $id);

    }else{
        $action = str_replace(["/"], "", $action);

        $callback = $routes[$action];

        echo call_user_func($callback);
    }

}