<?php
/*
Mapear la url ingresada en el navegador:
1 - controlador
2 - método
3 - parámetro
Ejemplo: /articulos/actualizar/4
*/
Class Core{
    protected $controller = "Pages";
    protected $method = "Home";
    protected $parameters = [];

    //Constructor
    public function __construct(){
        $url = $this->getUrl();
        
        // Verificar si $url está definido
        if(isset($url)){
            //Buscar en controllers si el controlador existe
            if(file_exists("../app/controllers/".ucwords($url[0]).".php")){
                //Si existe se setea como controlador por defecto
                $this->controller = ucwords($url[0]);

                //Desasigna el valor en la variable url
                unset($url[0]);
            }
        }
        
        //Requerir el controlador
        require_once("../app/controllers/".$this->controller.".php");
        $this->controller = new $this->controller;
        
        //Validar si se ha seteado el método
        if(isset($url[1])){
            
            //Validar si existe el metodo de la url
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        //Obtener los parámetros
        $this->parameters = $url ? array_values($url) : [];
        //Llamar callback con parametros array
        call_user_func_array([$this->controller, $this->method], $this->parameters);
    }
    
    public function getUrl(){
        if(isset($_GET["url"])){
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
?>