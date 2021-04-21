<?php

class News extends CI_Model
{

    public function category_registration($name)
    {
        return $this->db->insert("categories", array("name" => $name));
    }

    public function get_categories($name)
    {
        $this->db->where('name', $name);
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    
}
