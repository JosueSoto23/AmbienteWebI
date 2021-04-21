<?php

class News extends CI_Model
{

    public function new_registration($name)
    {
        return $this->db->insert("news", array("name" => $name));//faltaaaa
    }
    
}
