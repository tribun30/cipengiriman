<?php

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['record'] = $this->M_produk->tampilkan_data();
		$this->template->load('template', 'produk/lihat_data' , $data);
	}

	public function tambah()
	{

		$this->template->load('template', 'produk/input_data');
	}

	public function simpan()
	{
		$id = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$tipe_produk = $this->input->post('tipe_produk');
		

		$data = array('id_produk' => $id, 'nama_produk' => $nama_produk, 'tipe_produk' => $tipe_produk);
		$simpan = $this->M_produk->simpan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Produk Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Produk');
	}

	public function hapus($id)
	{
		$id = $this->uri->segment(3);
		$this->M_produk->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Produk Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Produk');
	}

	public function ubah()
	{
		$id = $this->uri->segment(3);
		$data['record'] = $this->M_produk->get_data($id)->row_array();
		$this->template->load('template', 'produk/edit_data', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$tipe_produk = $this->input->post('tipe_produk');
		

		$data = array('nama_produk' => $nama_produk, 'tipe_produk' => $tipe_produk);
		$simpan = $this->M_produk->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Produk Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Produk');
	}

}