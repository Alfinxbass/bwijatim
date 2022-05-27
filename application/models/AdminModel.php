<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function ambilPost()
    {
        $this->db->select('*');
        $this->db->from('post');
        return $this->db->get();
    }
    public function ambilKategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get();
    }

}

