<?php

class Category extends CI_Model
{

    public function category_registration($name)
    {
        return $this->db->insert("categories", array("name" => $name));
    }

    public function get_categories()
    {
        $query = $this->db->get('categories');
        return $query->result_array();
    }

    public function get_category($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('categories');
        return $query->result_array();
    }


    public function category_delete($id)
    {
        $this->db->delete('categories', array('id' => $id));
    }

    public function category_edit($id, $name)
    {
        $this->db->where('id', $id);
        $this->db->set('name', $name);
        return $this->db->update('categories');
    }
}
