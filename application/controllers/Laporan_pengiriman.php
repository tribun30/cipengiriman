<?php

class Laporan_pengiriman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporan_pengiriman');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['record'] = $this->M_laporan_pengiriman->tampilkan_data();
		$this->template->load('template', 'laporan_pengiriman/lihat_data' , $data);
	}

	public function tambah()
	{
		$id = $this->uri->segment(3);
		$data['record'] = $this->M_laporan_pengiriman->get_data($id)->row_array();
		$this->template->load('template', 'laporan_pengiriman/input_data', $data);
	}

	public function simpan()
	{
		$id = $this->input->post('id_sj');
		$status = $this->input->post('status');
		
		$data = array('status' => $status);
		$simpan = $this->M_laporan_pengiriman->simpan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Laporan Pengiriman Berhasil Dikirim<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('Laporan_pengiriman');
	}

}