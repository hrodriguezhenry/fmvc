<?php
//Ruta de la aplicación
define("APP_ROUTE", dirname(dirname(__FILE__)));

//Ruta URL
const URL_ROUTE = "/fmvc";

//Nombre del sitio
const SITE_NAME = "App Web";

//Zona horaria
date_default_timezone_set('America/Guatemala');

//Datos de conexión a la base de datos
const DB_HOST = "localhost";
const DB_NAME = "crud";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "chartset=utf8";
?>