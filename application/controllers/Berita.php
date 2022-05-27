<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('ListpostModel');
		
	}

	public function index()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('berita/index');
		$config['total_rows'] = count($this->ListpostModel->total_berita());
		$config['per_page'] = 4;
		$config['uri_segment'] = 3;
		// start dan limit
			$limit = $config['per_page'];
			$start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0 ;

			// ------
		$config['full_tag_open']	= '<div class="pagination_container d-flex flex-row align-items-center justify-content-center text-center"><ul class="pagination_list">';
		$config['full_tag_close']	= '</ul></div>';
		
		$config['first_link']		= 'First';
		$config['first_tag_open']	= '<li>';
		$config['first_tag_close']	= '</li>';
		
		$config['last_link']		= 'Last';
		$config['last_tag_open']	= '<li>';
		$config['last_tag_open']	= '</li>';

		$config['next_link']		= '&raquo';
		$config['next_tag_open']	= '<li style="padding-bottom:10px, text-decoration:none, hover:green;">';
		$config['next_tag_close']	= '</li>';

		$config['prev_link']		= '&laquo';
		$config['prev_tag_open']	= '<li style="text-decoration:none,hover:green;">';
		$config['prev_tag_close']	= '</li>';

		$config['cur_tag_open']		= '<li class="page-item active bg-success"><a>';
		$config['cur_tag_close']	= '</a></li>';

		$config['num_tag_open']		= '<li style="text-decoration:none;">';
		$config['num_tag_close']	= '</li>';

		$config['attributes']		= array('class' =>'pagination');
		// ------------

		$this->pagination->initialize($config);
		$data = [
			'title'			=> 'Berita',
			'paginasi' 		=> $this->pagination->create_links(),
			'berita'		=> $this->ListpostModel->berita($limit,$start),
			'latest_news'	=> $this->ListpostModel->latest_berita()
		];
        
		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_berita', $data);
		$this->load->view('templates/v_footer', $data);
	}

	public function detail_berita($slug)
	{
		
		$data = [
			'title'			=> 'Detail Berita',
			'berita' 		=> $this->ListpostModel->detail_berita($slug),
			'latest_news'	=> $this->ListpostModel->latest_berita()
			
		];

		$this->ListpostModel->visit($data['berita']);
		

		$this->load->view('templates/v_header', $data);
		$this->load->view('templates/v_navbar', $data);
		$this->load->view('v_detail_berita', $data);
		$this->load->view('v_detail_kategori', $data);
		$this->load->view('templates/v_footer', $data);
		
	}

}