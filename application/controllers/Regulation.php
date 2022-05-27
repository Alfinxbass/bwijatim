<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulation extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('RegulasiModel');
		
	}

	
	public function index()
	{
        $data ['title'] = "Regulasi";
        $data ['row'] = $this->db->get('regulasi')->row();
        $data ['uu'] = $this->db->get('uu')->result();
		

        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_regulasi', $data);
		$this->load->view('templates/v_footer', $data);
	}

	public function download($id_uu)
	{
		$this->load->helper('download');
		$fileinfo = $this->RegulasiModel->download($id_uu);
		$file = './uploads/'. $fileinfo['nama_file'];
		force_download($file, NULL);
	}

}
