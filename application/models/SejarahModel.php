<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SejarahModel extends CI_Model {

    public function getAllFiles(){
        $query = $this->db->get('sejarah');
        return $query->result(); 
    }

    public function simpan()
    {
        $data = [
            'isi_sejarah' => $this->input->post('isi_sejarah', true)
        
        ];

        $this->db->insert('sejarah', $data);
    }

}