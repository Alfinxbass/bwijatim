<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VisimisiModel extends CI_Model {

    public function getAllFiles(){
        $query = $this->db->get('visimisi');
        return $query->result(); 
    }

    public function simpan()
    {
        $data = [
            'visi' => $this->input->post('visi', true),
            'misi' => $this->input->post('misi', true)
        
        ];

        $this->db->insert('visimisi', $data);
    }

}