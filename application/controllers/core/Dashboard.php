<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('AdminModel');
		if($this->session->userdata('email') != 'bwijatim@gmail.com') {
            redirect('auth');
        }
	}

	
	public function index()
	{
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	$data ['title'] = "Dashboard";

		//variable menampung jumlah post
		$p 		= $this->AdminModel->ambilPost();
		$post	= $p->num_rows();

		// variable menampung jumlah kategori
		$k		= $this->AdminModel->ambilKategori();
		$kategori	= $k->num_rows();

		$datas = array(

				'jml_post' => $post,
				'jml_kategori' => $kategori,

		);

		
		$this->load->view('templates/admin_header.php', $data,);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/dashboard', $datas);
		$this->load->view('templates/admin_footer.php');
		
	}

	
}
