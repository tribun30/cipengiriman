<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['record'] = $this->M_user->tampilkan_data();
		$this->template->load('template', 'user/lihat_data' , $data);
	}

	public function tambah()
	{

		$this->template->load('template', 'user/input_data');
	}

	public function simpan()
	{
		$id = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$hak_akses = $this->input->post('hak_akses');
		
		$data = array('id_user' => $id, 'nama_user' => $nama_user, 'password' => $password, 'hak_akses' => $hak_akses);
		$simpan = $this->M_user->simpan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Customer Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('User');
	}

	public function hapus($id)
	{
		$id = $this->uri->segment(3);
		$this->M_user->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Customer Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('User');
	}

	public function ubah()
	{
		$id = $this->uri->segment(3);
		$data['record'] = $this->M_user->get_data($id)->row_array();
		$this->template->load('template', 'user/edit_data', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$hak_akses = $this->input->post('hak_akses');

		$data = array('nama_user' => $nama_user, 'password' => $password, 'hak_akses' => $hak_akses);
		$simpan = $this->M_user->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Customer Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('User');
	}

}