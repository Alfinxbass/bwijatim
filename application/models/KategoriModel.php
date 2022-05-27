<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {

    public function get_all_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('id_kategori','desc');
        return $this->db->get()->result();
    }

    public function simpan()
    {
        $kategori = $this->input->post('namakategori', true);
        $data = [];
        foreach ($kategori as $key => $value) {

            $data[] = [

                'nama_kategori' => $kategori[$key]

            ];
        }
        $this->db->insert_batch('kategori', $data);
    }

    public function update()
    {
        $data = ['nama_kategori' => $this->input->post('namakategori', true)];
        $this->db->where('id_kategori', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }

    public function jenis_kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }

    public function getListpost($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->where('post.id_kategori', $id_kategori);
        $this->db->limit(6);
        return $this->db->get()->result();
    }


}

