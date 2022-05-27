<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	
	public function index()
	{
        $data ['title'] = "Sejarah";
		$data ['row'] = $this->db->get('sejarah')->row();

        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_sejarah', $data);
		$this->load->view('templates/v_footer', $data);
	}

}
