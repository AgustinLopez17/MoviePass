<?php

    spl_autoload_register(function($className){
        $class = dirname(__DIR__) ."/" . str_replace("\\", "/", $className)  . ".php";
        include_once($class);
    });


?>