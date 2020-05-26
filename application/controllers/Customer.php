<?php

class Customer extends CI_Controller
{
	
public function __construct()
	{
		parent::__construct();
		$this->load->model('M_customer');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['record'] = $this->M_customer->tampilkan_data();
		$this->template->load('template', 'customer/lihat_data' , $data);
	}

	public function tambah()
	{

		$this->template->load('template', 'customer/input_data');
	}

	public function simpan()
	{
		$id = $this->input->post('id_cust');
		$nama_cust = $this->input->post('nama_cust');
		$alamat_cust = $this->input->post('alamat_cust');
		$tlp_cust = $this->input->post('tlp_cust');
		$email_cust = $this->input->post('email_cust');
		$pic = $this->input->post('pic');
		$jarak = $this->input->post('jarak');

		$data = array('id_cust' => $id, 'nama_cust' => $nama_cust, 'alamat_cust' => $alamat_cust, 'tlp_cust' => $tlp_cust, 'email_cust' => $email_cust, 'pic' => $pic, 'jarak' => $jarak);
		$simpan = $this->M_customer->simpan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Customer Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Customer');
	}

	public function hapus($id)
	{
		$id = $this->uri->segment(3);
		$this->M_customer->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Customer Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Customer');
	}

	public function ubah()
	{
		$id = $this->uri->segment(3);
		$data['record'] = $this->M_customer->get_data($id)->row_array();
		$this->template->load('template', 'customer/edit_data', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id_cust');
		$nama_cust = $this->input->post('nama_cust');
		$alamat_cust = $this->input->post('alamat_cust');
		$tlp_cust = $this->input->post('tlp_cust');
		$email_cust = $this->input->post('email_cust');
		$pic = $this->input->post('pic');
		$jarak = $this->input->post('jarak');

		$data = array('nama_cust' => $nama_cust, 'alamat_cust' => $alamat_cust, 'tlp_cust' => $tlp_cust, 'email_cust' => $email_cust, 'pic' => $pic, 'jarak' => $jarak);
		$simpan = $this->M_customer->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data Customer Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Customer');
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