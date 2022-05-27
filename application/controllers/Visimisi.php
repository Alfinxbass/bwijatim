<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	
	public function index()
	{
        $data ['title'] = "Visi & Misi";
		$data ['row'] = $this->db->get('visimisi')->row();

        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_visimisi', $data);
		$this->load->view('templates/v_footer', $data);
	}

}
