<?php

class News extends CI_Model
{

    public function new_registration($title, $desc, $link, $pubDate, $id_newssource, $user_id, $category)
    {
        $data = array(
            'title' => $title,
            'short_description' => $desc,
            'link' => $link,
            'date' => $pubDate,
            'news_source_id' => $id_newssource,
            'user_id' => $user_id,
            'category' => $category
        );
        return $this->db->insert('news', $data);
    }

    public function new_filter($title, $desc, $link, $pubDate, $id_newssource, $user_id, $category, $filter)
    {
        if ($category === $filter) {
            $data = array(
                'title' => $title,
                'short_description' => $desc,
                'link' => $link,
                'date' => $pubDate,
                'news_source_id' => $id_newssource,
                'user_id' => $user_id,
                'category' => $category
            );
            return $this->db->insert('news', $data);
        }
    }

    public function get_news()
    {
        $user = $_SESSION['users'];
        foreach ($user as $row) {
            $id = $row['id'];
        }
        $this->db->where('user_id', $id);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    public function news_delete()
    {
        $this->db->empty_table('news');
    }
}
