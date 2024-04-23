<?php
//Clase controlador principal
//Se encarga de poder cargar los módelos y las vistas
class Controllers{
    //Cargar módelo
    public function model($model){
        //Carga del modelo
        require_once("../app/models/".$model.".php");
        //Intancia del módelo
        return new $model;
    }

    //Cargar vista
    public function view($view, $data = []){
        //Validar que exista la vista
        if(file_exists("../app/views/".$view.".php")){
            require_once("../app/views/".$view.".php");
        } else{
            die("La vista no existe");
        }
    }
}
?>