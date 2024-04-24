<?php
//Clase controlador principal
//Se encarga de poder cargar los módelos y las vistas
class Controllers{
    protected $model;
    public $test;

    public function __construct(){
        $this->model();
    }

    //Cargar módelo
    public function model(){
        //Carga del modelo
        $model = get_class($this);
        $model = str_replace("Controller","Model", $model);
        $routClassModel = "../App/Models/".$model.".php";
        
        //Se verifica que exista el modelo
        if(file_exists($routClassModel)){
            require_once($routClassModel);

            //Intancia del módelo
            $this->model = new $model;
        }
    }

    //Cargar vista
    public function view($view, $data = []){
        //Carga de la vista
        require_once("../App/Views/".$view.".php");
    }
}
?>