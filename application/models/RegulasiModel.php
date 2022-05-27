<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RegulasiModel extends CI_Model {

    public function getAllFiles(){
        $query = $this->db->get('uu');
        return $query->result(); 
    }
    public function upload($data)
    {
        return $this->db->insert('uu',$data);
    }

    public function simpan()
    {
        $data = [
            'isi_regulasi' => $this->input->post('isi_regulasi', true)
        
        ];

        $this->db->insert('regulasi', $data);
    }

    public function update()
    {
        $data = [

            'isi_regulasi' => $this->input->post('isi_regulasi', true)

        ];

        $this->db->where('id_regulasi', $this->input->post('id'));
        $this->db->update('regulasi', $data);
    }

    public function download($id_uu)
    {
        $query = $this->db->get_where('uu', ['id_uu'=>$id_uu]);
        return $query->row_array();
    }

}