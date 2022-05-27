<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ListpostModel');
		$this->load->model('KategoriModel');
		
	}

	
	public function index()
	{
        $data ['title']="Beranda";
		$data['berita'] = $this->ListpostModel->home_berita();
		$data['beritasm'] = $this->ListpostModel->small_berita();
		$data['populars'] = $this->ListpostModel->popular_berita();
		$data['kategori'] = $this->KategoriModel->get_all_kategori();
		
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_auth', $data);
		$this->load->view('templates/v_footer', $data);
	}

	public function login()
	{
		$data ['title']= "BWI JATIM";

		$this->load->view('admin/login.php', $data);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->KategoriModel->jenis_kategori($id_kategori);
		$data ['title'] = $kategori->nama_kategori;
		$data ['berita'] = $this->KategoriModel->getListpost($id_kategori);
		$data ['latest_news'] = $this->ListpostModel->latest_berita();

		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_detail_kategori', $data);
		$this->load->view('templates/v_footer', $data);
	}
	public function konten($id_kategori)
	{
		$kategori = $this->KategoriModel->jenis_kategori($id_kategori);
		$data ['title'] = $kategori->nama_kategori;
		$data ['berita'] = $this->KategoriModel->getListpost($id_kategori);
		$data ['latest_news'] = $this->ListpostModel->latest_berita();

		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_auth', $data);
		$this->load->view('templates/v_footer', $data);
	}
	

}