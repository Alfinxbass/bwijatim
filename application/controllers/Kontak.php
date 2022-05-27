<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	
	public function index()
	{
        $data ['title'] = "Kontak";
		
        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_kontak', $data);
		$this->load->view('templates/v_footer', $data);
	}

}
