<?php
class Pages extends Controllers{
    private $userModel;
    public function __construct(){
        $this->userModel = $this->model("User");
    }

    public function home(){
        //Obtener los usuarios
        $users = $this->userModel->getUsers();
        $data = [
            "users" => $users
        ];
        
        $this->view("pages/Home", $data);
    }

    public function insert(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "name" => trim($_POST["name"]),
                "email" => trim($_POST["email"]),
                "phone" => trim($_POST["phone"]),
            ];

            if($this->userModel->insertUser($data)){
                redirect("");
            } else{
                die("Algo salió mal");
            }
        } else {
            $data = [
                "name" => "",
                "email" => "",
                "telefono" => ""
            ];

            $this->view("pages/insert", $data);
        }
    }

    public function update($id){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "id" => $id,
                "name" => trim($_POST["name"]),
                "email" => trim($_POST["email"]),
                "phone" => trim($_POST["phone"]),
            ];

            if($this->userModel->updateUser($data)){
                redirect("");
            } else{
                die("Algo salió mal");
            }
        } else {
            //Obtener informacion de usuario desde el modelo
            $user = $this->userModel->getUserId($id);

            $data = [
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                "phone" => $user->phone
            ];

            $this->view("pages/update", $data);
        }
    }

    public function delete($id){
        $user = $this->userModel->getUserId($id);

        $data = [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "phone" => $user->phone
        ];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "id" => $id
            ];

            if($this->userModel->deleteUser($data)){
                redirect("");
            } else{
                die("Algo salió mal");
            }
        }

        $this->view("pages/delete", $data);
    }
}
?>