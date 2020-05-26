<?php

class Auth extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_user');
	}


	public function index()
	{

		// jika button di klik (yg ada di view)
		if(isset($_POST['submit'])){
			//proses login disini
			$nama_user	=	$this->input->post('nama_user');
			$password	=	$this->input->post('password');	
			$hasil		=	$this->M_user->login($nama_user,$password);
			$jabatan	=	$this->db->get_where('user',array('nama_user'=>$nama_user))->row_array();
			if($hasil==1)
			{
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat Anda Berhasil Login <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				$this->session->set_userdata($jabatan);
				redirect ('Home');
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Kombinasi Password dan Nama User Salah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('Auth');
			}
		}else{
		$this->load->view('form_login');

		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('password');
		
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Anda Telah Keluar dari Aplikasi PT TKM</div>');
		redirect('Auth');
	}
}