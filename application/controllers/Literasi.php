<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Literasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('LiterasiModel');
		
	}

	
	public function index()
	{
        $data ['title'] = "Literasi Wakaf";
		$data ['lit'] = $this->db->get('literasi_wakaf')->result();

        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_literasi', $data);
		$this->load->view('templates/v_footer', $data);
	}

	public function detail_literasi($id)
	{
		$data['title'] = 'Detail Berita';
		$data['liter'] = $this->LiterasiModel->detail($id);
		

		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_detail_literasi', $data);
		$this->load->view('templates/v_footer', $data);
		
	}

}
