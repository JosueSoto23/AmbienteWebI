<?php

class User extends CI_Model
{

    public function user_registration($name, $email, $pass, $role)
    {
        return $this->db->insert("users", array("name" => $name, "email" => $email, "pass" => $pass, "role" => $role));
    }

    public function login($email, $pass)
    {
        $this->db->where('email', $email);
        $this->db->where('pass', md5($pass));
        $query = $this->db->get('users');
        return $query->result_array();
    }

}
