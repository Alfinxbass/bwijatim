<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	
	public function index()
	{
        $data ['title'] = "Artikel";

        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_artikel', $data);
		$this->load->view('templates/v_footer', $data);
	}

}
