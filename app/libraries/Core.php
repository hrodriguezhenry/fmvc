<?php
/*
La clase Core mapea la url ingresada en el navegador:
    1 - Controlador
    2 - Método
    3 - Parámetro

    Ejemplo: /articulos/actualizar/4
*/
Class Core{
    protected $controller = "Home";
    protected $method = "Home";
    protected $parameters = [];

    public function __construct(){
        $url = $this->getUrl();
        
        // Verificar si $url está definido
        if(isset($url)){
            $url[0] = $url[0]."Controller";
            //Buscar en controllers si el controlador existe
            if(file_exists("../App/Controllers/".ucwords($url[0]).".php")){
                //Si existe se setea como controlador por defecto
                $this->controller = ucwords($url[0]);

                //Desasigna el método en la varible url
                unset($url[0]);
            }
        } else{
            $this->controller = $this->controller."Controller";
        }

        //Se requiere el controlador
        require_once("../App/Controllers/".$this->controller.".php");
        $this->controller = new $this->controller;
        
        //Validar si se ha seteado el método
        if(isset($url[1])){
            
            //Validar si existe el método de la url en el controlador
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        //Obtener los parámetros de la url
        $this->parameters = $url ? array_values($url) : [];

        //Llamamos a la función callback con los parámetros de la url
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