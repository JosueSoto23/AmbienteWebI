<?php

class UsersModel extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function user_register($name, $email, $pass, $role){
        return $this->database->insert("users", array("name" => $name, "email" => $email, "pass" => $pass, "role" => $role));
    }

    public function login($email, $pass) {
        $this->database->where('email', $email);
        $this->database->where('pass', $pass);
        $query = $this->database->get('users');
        return $query->result_array();
      }
    

}

?>