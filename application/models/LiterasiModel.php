<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LiterasiModel extends CI_Model {

    public function getAllFiles()
    {
        $query = $this->db->get('literasi_wakaf');
        return $query->result(); 
    }

    public function simpan()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'author' => $this->input->post('author', true),
            'isi_literasi' => $this->input->post('isi_literasi', true)
        
        ];

        $this->db->insert('literasi_wakaf', $data);
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('literasi_wakaf');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }


}