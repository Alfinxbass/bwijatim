<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SusorganisasiModel extends CI_Model {

    public function getAllFiles(){
        $query = $this->db->get('susorganisasi');
        return $query->result(); 
    }

    public function simpan()
    {
        $data = [
            'isi_susunan' => $this->input->post('isi_susunan', true)
            
        ];

        $this->db->insert('susunan', $data);
    }

    public function update()
    {
        $data = [

            'isi_susunan' => $this->input->post('isi_susunan', true)

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('susunan', $data);
    }
}