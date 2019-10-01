<?php namespace Process;

use Config\Autoload as Autoload;
use Model\User as User;

Autoload::Start();
session_start();

if(isset($_SESSION["loggedUser"])){

     $loggedUser = $_SESSION["loggedUser"];
}
else{
    header("location: index.php");
}

?>