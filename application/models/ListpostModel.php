<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListpostModel extends CI_Model {

    public function getListpost()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        return $this->db->get();
    }
    public function upload($data)
    {
        return $this->db->insert('post',$data);
    }

    public function simpan()
    {
    
        $data = [

            'tanggal' => $this->input->post('tanggal', true),
            'judul' => $this->input->post('judul', true),
            'slug' => url_title($this->input->post('slug'),'dash',true),
            'author' => $this->input->post('author', true),
            'post' => $this->input->post('post', true),
            'id_kategori' => $this->input->post('id_kategori'),
            'gambar' => $this->input->post('gambar', true),
        ];

        $this->db->insert('post', $data);
    }

    public function update()
    {
        $data = [

            'tanggal' => $this->input->post('tanggal', true),
            'judul' => $this->input->post('judul', true),
            'judul' => $this->input->post('judul', true),
            'author' => $this->input->post('author', true),
            'post' => $this->input->post('post', true),
            'id_kategori' => $this->input->post('id_kategori'),
            'gambar' => $this->input->post('gambar', true),
        ];

        $this->db->where('id_post', $this->input->post('id_post'));
        $this->db->update('post', $data);
    }

    public function visit($berita) {
        $data = ['view' => $berita->view + 1];
        $this->db->where('id_post', $berita->id_post);
        $this->db->update('post', $data);
    }

    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->order_by('id_post', 'desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }
    
    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->order_by('id_post', 'desc');
        return $this->db->get()->result();
    }
    
    public function detail_berita($slug)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->where('slug', $slug);
        return $this->db->get()->row();
    }

    public function latest_berita()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->order_by('id_post', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function popular_berita()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->order_by('view', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function home_berita()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->order_by('id_post', 'desc');
        $this->db->limit(1);
        return $this->db->get()->result()[0];
    }
    
    public function small_berita()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('kategori', 'kategori.id_kategori = post.id_kategori');
        $this->db->order_by('id_post', 'desc');
        $this->db->limit(4)->offset(1);
        return $this->db->get()->result();
    }
}