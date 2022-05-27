<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	
	public function index()
	{
        $data ['title']= "Profil";

        
		$this->load->view('v_header', $data);
		$this->load->view('v_visimisi', $data);
		$this->load->view('v_footer', $data);
	}

}
