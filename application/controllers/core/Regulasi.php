<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('RegulasiModel');
		if($this->session->userdata('email') != 'bwijatim@gmail.com') {
            redirect('auth');
        }
	}

	
	public function index()
	{
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	$data ['title'] = "Regulasi";
        $data ['row'] = $this->db->get('regulasi')->row();
        $data ['uu'] = $this->db->get('uu')->result();
		
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/regulasi', $data);
		$this->load->view('templates/admin_footer.php');
		
	}

    public function tambah()
    {
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data ['title'] = "Tambah Regulasi";
        $data ['regulasi'] = $this->db->get('regulasi')->result();

		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/tambah_regulasi', $data);
		$this->load->view('templates/admin_footer.php');
    }
    public function tambah_uu()
    {
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data ['title'] = "Tambah UU";
        $data ['uu'] = $this->db->get('uu')->result();
        // $this->load->view('admin/tambah_uu', array('error' => ' ' ));

		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/tambah_uu', array('error' => ' '), $data);
		$this->load->view('templates/admin_footer.php');
    }

	public function edit($id_regulasi)
    {
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data ['title'] = "Edit Regulasi";
		$data ['reg'] = $this->db->get('regulasi')->result();
		$data ['row'] = $this->db->get_where('regulasi', ['id_regulasi' => $id_regulasi])->row();
		
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/edit_regulasi', $data);
		$this->load->view('templates/admin_footer.php');
    }

	public function simpan()
	{
		$this->RegulasiModel->simpan();
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
			<b>Berhasil Menyimpan</b><b><i class="ml-1 bi bi-check2-circle" height="30" width="30"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/regulasi');
		}
	}
	public function update()
	{
		$this->RegulasiModel->update();
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
			<b>Berhasil Di Update</b><b><i class="ml-1 bi bi-check2-circle" height="30" width="30"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/regulasi');
		}
	}

	public function hapus($id_uu)
	{
		$this->db->delete('uu', ['id_uu' => $id_uu]);
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
                                            <b>Berhasil Di Hapus</b><b><i class="ml-1 bi bi-check2-circle"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/regulasi');
		}
	}
    public function upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 0;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('filename'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('admin/tambah_uu', $error);
        }
        else
        {
                $upload_data =$this->upload->data();
                $data = [
                    'nama_file' => $upload_data['file_name']
                ];

                $this->RegulasiModel->upload($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
			    <b>Berhasil Menyimpan</b><b><i class="ml-1 bi bi-check2-circle" height="30" width="30"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
                redirect ('core/regulasi');

        }


    }
	public function download($id_uu)
	{
		$this->load->helper('download');
		$fileinfo = $this->RegulasiModel->download($id_uu);
		$file = './uploads/'. $fileinfo['nama_file'];
		force_download($file, NULL);
	}

	
}
