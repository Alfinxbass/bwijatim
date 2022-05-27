<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('SejarahModel');
		if($this->session->userdata('email') != 'bwijatim@gmail.com') {
            redirect('auth');
        }
	}

	
	public function index()
	{
        $data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	$data ['title'] = "Sejarah";
        $data ['row'] = $this->db->get('sejarah')->row();

		
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('templates/admin_topbar', $data);
		$this->load->view('admin/sejarah', $data);
		$this->load->view('templates/admin_footer', $data);
		
	}

    public function tambah()
    {
        $data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data ['title'] = "Tambah Sejarah";
        $data ['regulasi'] = $this->db->get('sejarah')->result();

		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/tambah_sejarah', $data);
		$this->load->view('templates/admin_footer.php');
    }

	public function simpan()
	{
		$this->SejarahModel->simpan();
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
			<b>Berhasil Menyimpan</b><b><i class="ml-1 bi bi-check2-circle" height="30" width="30"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/sejarah');
		}
	}
}
