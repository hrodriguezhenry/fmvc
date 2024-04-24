<?php
require_once("../App/Config/Config.php");
require_once("../App/Helpers/Helpers.php");

//Autocarga de las librerias
spl_autoload_register(function($class){
    require_once("../App/Libraries/".$class.".php");
});

//Instanciamos la clase Core
$init = new Core;
?>