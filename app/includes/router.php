<?php

$routes = [];
$names = [];

function route ($action, $callback, $name = null) {
    global $routes;
    global $names;

    if ($name) {
        $names[$name] = $action;
    }

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

function path ($name, $id = null) {
    global $names;

    if ($id) {
        $routePath = trim($names[$name], "/");

        $arr = explode("/", $routePath, 2);

        echo $arr[0] . "/WC" . $id . "WC/" . $arr[1];

    }else{
        echo $names[$name];
    }
}