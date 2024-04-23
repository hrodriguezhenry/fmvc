<?php
require_once("config/Config.php");
require_once("helpers/Helpers.php");

//Autocarga de las librerias
spl_autoload_register(function($class){
    require_once("libraries/".$class.".php");
})
?>