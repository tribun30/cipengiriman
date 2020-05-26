<?php

class jarak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jarak');
		$this->load->model('M_customer');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['record'] = $this->M_jarak->tampilkan_data();
		$this->template->load('template', 'jarak/lihat_data', $data);
	}

	public function tambah()
	{

		$data['customer'] = $this->M_customer->tampilkan_data();
		$this->template->load('template', 'jarak/input_data' , $data);
	}

	public function simpan()
	{
		$id_jarak = $this->input->post('id_jarak');
		$tanggal_jarak = $this->input->post('tanggal_jarak');
		$id_cust = $this->input->post('id_cust');
		

		$data = array('id_jarak' => $id_jarak, 'tanggal_jarak' => $tanggal_jarak, 'id_cust' => $id_cust);
		$simpan = $this->M_jarak->simpan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data jarak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('jarak');
	}

	public function hapus($id)
	{
		$id = $this->uri->segment(3);
		$this->M_jarak->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data jarak Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('jarak');
	}

	public function ubah()
	{
		$id = $this->uri->segment(3);
		$data['record'] = $this->M_jarak->get_data($id)->row_array();
		$this->template->load('template', 'jarak/edit_data', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id_jarak');
		$id_cust = $this->input->post('id_cust');
		$jarak = $this->input->post('jarak');
		

		$data = array('id_cust' => $id_cust, 'jarak' => $jarak);
		$simpan = $this->M_jarak->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data jarak Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('jarak');
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['customer'] = $this->M_customer->tampilkan_data();
		$data['record'] = $this->M_customer->tampilkan_data_detail($id);
		$this->template->load('template', 'customer/input_data_detail', $data);
	}

	public function simpan_detail()
	{
		$id_cust = $this->input->post('id_cust');
		$cust_id = $this->input->post('cust_id');
		$jarak = $this->input->post('jarak');
		
		$data = array('id_cust' => $id_cust, 'cust_id' => $cust_id, 'jarak' => $jarak);
		$simpan = $this->M_customer->simpan_detail($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Customer Detail Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function hapus_detail($id)
	{
		$this->M_customer->hapus_detail($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Surat Customer Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}

}