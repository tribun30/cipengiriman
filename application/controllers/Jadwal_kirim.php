<?php

class Jadwal_kirim extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal_kirim');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$tanggal_jarak = $this->input->post('tanggal_jarak');
		$data['tanggal_jarak'] = $tanggal_jarak;
		$data['record'] = $this->M_jadwal_kirim->laporan($tanggal_jarak)->result();
		$this->template->load('template', 'jadwal_kirim/laporan',$data);
	}

	// public function index()
	// {
	// 	$tanggal = $this->input->post('tanggal');
	// 	$data['tanggal'] = $tanggal;
	// 	$data['record'] = $this->M_jadwal_kirim->laporan($tanggal)->result();
	// 	$this->template->load('template', 'jadwal_kirim/laporan',$data);
	// }

}