<?php

class Surat_jalan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_surat_jalan', 'M_customer', 'M_produk', 'M_mobil'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['record'] = $this->M_surat_jalan->tampilkan_data();
		$this->template->load('template', 'surat_jalan/lihat_data' , $data);
	}

	public function tambah()
	{
		$kode_sj = $this->M_surat_jalan->buat_kode();
		$surat_jalan = new stdClass();
        $surat_jalan->id_sj = $kode_sj;
		$data = array(
            'page' => 'tambah',
            'row' => $surat_jalan,
        );

		$data['produk'] = $this->M_produk->tampilkan_data();
		$data['customer'] = $this->M_customer->tampilkan_data();
		$this->template->load('template', 'surat_jalan/input_data', $data);
	}

	public function simpan()
	{
		$id = $this->input->post('id_sj');
		$tgl_sj = $this->input->post('tgl_sj');
		$id_cust = $this->input->post('id_cust');
	
		
		$data = array('id_sj' => $id, 'tgl_sj' => $tgl_sj, 'id_cust' => $id_cust);
		$simpan = $this->M_surat_jalan->simpan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Surat Jalan Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Surat_jalan');
	}

	public function hapus($id)
	{
		$id = $this->uri->segment(3);
		$this->M_surat_jalan->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Surat Jalan Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Surat_jalan');
	}

	public function ubah()
	{
		$id = $this->uri->segment(3);
		$data['produk'] = $this->M_produk->tampilkan_data();
		$data['customer'] = $this->M_customer->tampilkan_data();
		$data['record'] = $this->M_surat_jalan->get_data($id)->row_array();
		$this->template->load('template', 'surat_jalan/edit_data', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id_sj');
		$tgl_sj = $this->input->post('tgl_sj');
		$id_cust = $this->input->post('id_cust');
		$id_mobil = $this->input->post('id_mobil');
		
		$data = array('tgl_sj' => $tgl_sj, 'id_cust' => $id_cust);
		$simpan = $this->M_surat_jalan->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Surat Jalan Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Surat_jalan');	
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['produk'] = $this->M_produk->tampilkan_data();
		$data['record'] = $this->M_surat_jalan->tampilkan_data_detail($id);
		$this->template->load('template', 'surat_jalan/input_data_detail', $data);
	}

	public function simpan_detail()
	{
		$id = $this->input->post('id_sj_detail');
		$id_sj = $this->input->post('id_sj');
		$id_produk = $this->input->post('id_produk');
		$qty = $this->input->post('qty');
		
		$data = array('id_sj_detail' => $id, 'id_sj' => $id_sj, 'id_produk' => $id_produk, 'qty' => $qty);
		$simpan = $this->M_surat_jalan->simpan_detail($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Surat Jalan Detail Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function hapus_detail($id)
	{
		$this->M_surat_jalan->hapus_detail($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Surat Jalan Detal Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}
}