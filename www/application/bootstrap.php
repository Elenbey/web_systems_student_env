<?php
header("Content-Type: text/html;charset=utf-8");

function __autoload($classname){
    $path="class/" . $classname . ".php";
    if(!is_file($path))
        echo "Файл с именем " . $classname . " Не найден";
    else
        require_once($path);

}
 require_once("application/actions.php");
 require_once("application/routes.php");

Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);