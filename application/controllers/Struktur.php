<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	
	public function index()
	{
        $data ['title'] = "Struktur Organisasi";
		$data ['row'] = $this->db->get('susunan')->row();
		$data ['tug'] = $this->db->get('tugas')->row();

        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_struktur', $data);
		$this->load->view('templates/v_footer', $data);
	}

}
