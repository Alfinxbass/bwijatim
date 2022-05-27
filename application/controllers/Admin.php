<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		// if($this->session->userdata('username') != 'Administrator') {
        //     redirect('auth');
        // }
	}
	public function index()
	{
		$data ['title']= "BWI Jatim | Login";
		
		$this->load->view('admin/login_header', $data);
		$this->load->view('admin/login', $data);
		$this->load->view('admin/login_footer', $data);
	}
	
	public function registrasi()
	{
		$this->form_validation->set_rules('username','Username','required|trim',
		[	'required' => 'Username Tidak Boleh Kosong']);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',
		[
			'required' 		=> 'Username Tidak Boleh Kosong',
			'valid_email'	=> 'Email Harus Valid',
			'is_unique'		=> 'Email Telah Terdaftar'
		]);
		$this->form_validation->set_rules('password', 'Password' , 'required|trim',
		[	'required' => 'Password Tidak Boleh Kosong']);


	if ($this->form_validation->run() == FALSE) {

		$data['title'] = "BWI Jatim | Registrasi";


		$this->load->view('admin/login_header.php', $data);
		$this->load->view('admin/registrasi.php', $data);
		$this->load->view('admin/login_footer.php', $data);
		
		} else {

			$data = 
			[
				'username' => $this->input->post('username', true),
				'email' => $this->input->post('email', true),
				'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),

			];

			$this->db->insert('user', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            Akun Telah Terdaftar. Silahkan Login<button type="button" class="close alert-success" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			redirect('admin');
		}

	}

	public function login()
	{

		
		
		$cek_email = $this->db->get_where('user', ['email' => $this->input->post('email', true)])->row();
		
		if ($cek_email) { // jika email ada 
			if(password_verify($this->input->post('password'), $cek_email->password)) { // jika password sama 

				if ($cek_email->username == 'Administrator') { // untuk admin
					$data_session = [

						'id' => $cek_email->id,
						'email' => $cek_email->email,
						'username' => $cek_email->username,
					];
					$this->session->set_userdata($data_session);
					// echo $this->session->userdata('username');
					redirect ('core/dashboard');
				}

			}else { // jika password tidak sama 
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            Password Anda Salah. Ulangi Lagi !!!<button type="button" class="close alert-success" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
				
				$data ['title']= "BWI Jatim | Login";
			
			$this->load->view('admin/login_header', $data);
			$this->load->view('admin/login', $data);
			$this->load->view('admin/login_footer', $data);
			}
		} else { // jika email tidak ada 
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            Email Anda Salah. Ulangi Lagi !!!<button type="button" class="close alert-success" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			$data ['title']= "BWI Jatim | Login";
			
			$this->load->view('admin/login_header', $data);
			$this->load->view('admin/login', $data);
			$this->load->view('admin/login_footer', $data);
			
		}
		
	}	

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('admin');
	}
}

