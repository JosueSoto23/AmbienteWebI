<?php

class Sources extends CI_Model
{

    public function sources_registration($name, $rss, $category, $user_id)
    {
        return $this->db->insert("newssources", array("name" => $name, "rss" => $rss, "category" => $category, "user_id" => $user_id));
    }

    public function get_sources()
    {
        $query = $this->db->get('newssources');
        return $query->result_array();
    }

    public function get_source($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('newssources');
        return $query->result_array();
    }

    public function source_delete($id)
    {
        $this->db->delete('newssources', array('id' => $id));
    }

    public function source_edit($id, $name, $rss, $category)
    {
        $this->db->where('id', $id);
        $this->db->set('name', $name);
        $this->db->set('rss', $rss);
        $this->db->set('category', $category);
        return $this->db->update('newssources');
    }
    
}
