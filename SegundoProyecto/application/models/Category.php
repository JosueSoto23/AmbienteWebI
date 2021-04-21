<?php

class Category extends CI_Model
{

    public function category_registration($name)
    {
        return $this->db->insert("categories", array("name" => $name));
    }

	public function get_categories() {
		$query = $this->db->get('categories');
		return $query->result_array();
	  }

}
