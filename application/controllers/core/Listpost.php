<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listpost extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ListpostModel');
		$this->load->library('upload');
		if($this->session->userdata('email') != 'bwijatim@gmail.com') {
            redirect('auth');
        }
	}

	
	public function index()
	{
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	$data ['title'] = "List Posting";
		$data['rows'] = $this->ListpostModel->getListpost()->result();

		
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/posting_port', $data);
		$this->load->view('templates/admin_footer.php');
		
	}

    public function tambah()
    {
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data ['title'] = "Tambah Posting";
        $data ['kategori'] = $this->db->get('kategori')->result();

		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/tambah_post', $data);
		$this->load->view('templates/admin_footer.php');
    }
	
	public function simpan_post()
	{
		$config['upload_path']          = './assets/back/img';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('gambar'))
		{
			echo "gagal";	
		}
		else
		{
				$gambar = $this->upload->data();
				$gambar = $gambar['file_name'];
				$tgl	= $this->input->post('tanggal', true);
				$jdl	= $this->input->post('judul', true);
				$slug	= url_title($this->input->post('judul'),'dash', true);
				$post	= $this->input->post('post', true);
				$id_ktg	= $this->input->post('id_kategori', true);
				$author	= $this->input->post('author', true);

				$data = [
					'tanggal' => $tgl,
					'judul' => $jdl,
					'slug' => $slug,
					'post' => $post,
					'id_kategori' => $id_ktg,
					'author' => $author,
					'gambar' => $gambar,				
				];
				$this->ListpostModel->upload($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
			<b>Berhasil Menyimpan</b><b><i class="ml-1 bi bi-check2-circle" height="30" width="30"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/listpost');

		}
	}

	public function edit($id)
    {
		$data['anggota'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data ['title'] = "Edit Posting";
		$data ['kategori'] = $this->db->get('kategori')->result();
		$data ['row'] = $this->db->get_where('post', ['id_post' => $id])->row();
		
		$this->load->view('templates/admin_header.php', $data);
		$this->load->view('templates/admin_sidebar.php', $data);
		$this->load->view('templates/admin_topbar.php', $data);
		$this->load->view('admin/edit_post', $data);
		$this->load->view('templates/admin_footer.php');
    }

	public function update()
	{
		$this->ListpostModel->update();
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
			<b>Berhasil Di Update</b><b><i class="ml-1 bi bi-check2-circle" height="30" width="30"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/listpost');
		}
	}

	public function hapus($id)
	{
		$this->db->delete('post', ['id_post' => $id]);
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('message', '<div class="alert alert-success col-md-3" role="alert">
                                            <b>Berhasil Di Hapus</b><b><i class="ml-1 bi bi-check2-circle"></i></b><button type="button" class="close btn-sm alert-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>  </div>');
			
			redirect('core/listpost');
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

	
}