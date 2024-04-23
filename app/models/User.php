<?php
class User{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUsers(){
        $this->db->query("SELECT * FROM users");
        $results = $this->db->records();
        return $results;
    }

    public function getUserId($id){
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(":id", $id);
        $row = $this->db->record();
        return $row;
    }
    public function insertUser($data){
        $this->db->query("INSERT INTO users(name, email, phone) 
                        VALUES (:name, :email, :phone)");
        //Vincular valores
        $this->db->bind(":name", $data["name"]);
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":phone", $data["phone"]);
        
        if($this->db->execute()){
            return true;
        } else{
            return false;
        }
    }

    public function updateUser($data){
        $this->db->query("UPDATE users
                        SET name = :name, email = :email, phone = :phone
                        WHERE id = :id");
        //Vincular valores
        $this->db->bind(":id", $data["id"]);
        $this->db->bind(":name", $data["name"]);
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":phone", $data["phone"]);
        
        if($this->db->execute()){
            return true;
        } else{
            return false;
        }
    }

    public function deleteUser($data){
        $this->db->query("DELETE FROM users WHERE id = :id");
        //Vincular valores
        $this->db->bind(":id", $data["id"]);

        //Ejecutar  
        if($this->db->execute()){
            return true;
        } else{
            return false;
        }
    }
}


?>