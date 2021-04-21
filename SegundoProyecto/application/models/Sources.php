<?php

class Sources extends CI_Model
{

    public function Sources_registration($name)
    {
        return $this->db->insert("newssources", array("name" => $name));//FAltaaaaaaaaaaaaa
    }

    
}
