<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TugasModel extends CI_Model {

    public function getAllFiles(){
        $query = $this->db->get('tugas');
        return $query->result(); 
    }

    public function simpan()
    {
        $data = [
            'isi_tugas' => $this->input->post('isi_tugas', true),
            
        
        ];

        $this->db->insert('tugas', $data);
    }

    public function update()
    {
        $data = [

            'isi_tugas' => $this->input->post('isi_tugas', true)

        ];

        $this->db->where('tugas', $this->input->post('id'));
        $this->db->update('tugas', $data);
    }

}