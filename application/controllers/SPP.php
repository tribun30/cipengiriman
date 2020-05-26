<?php

class SPP extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_SPP', 'M_customer', 'M_produk', 'M_mobil'));
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['record'] = $this->M_SPP->tampilkan_data();
		$this->template->load('template', 'SPP/lihat_data' , $data);
	}

	public function tambah()
	{	
		$data['produk'] = $this->M_produk->tampilkan_data();
		$data['customer'] = $this->M_customer->tampilkan_data();
		$this->template->load('template', 'SPP/input_data', $data);
	}

	public function simpan()
	{
		$ID_SPP = $this->input->post('ID_SPP');
		$Tanggal = $this->input->post('Tanggal');
		$id_cust = $this->input->post('id_cust');
		$id_produk = $this->input->post('id_produk');
		$jml_kirim = $this->input->post('jml_kirim');

    	//image
    	$SPP = $_FILES['SPP'];
    	if ($SPP= ''){} else{
    		$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|jepg|png';
			$config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('SPP')){
				echo "upload gagal"; die();
			} else {
				$SPP = $this->upload->data('file_name');
			}
    	}

		$data = array('ID_SPP' => $ID_SPP, 'Tanggal' => $Tanggal, 'id_cust' => $id_cust, 'id_produk' => $id_produk, 'jml_kirim' => $jml_kirim, 'SPP' => $SPP);
		$simpan = $this->M_SPP->simpan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Surat Jalan Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('SPP');
	}

	public function hapus($id)
	{
		$id = $this->uri->segment(3);
		$this->M_SPP->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Surat Jalan Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('SPP');
	}

	public function ubah($ID_SPP)
	{
		$ID_SPP = $this->uri->segment(3);
		$data['record'] = $this->M_SPP->get_data($ID_SPP)->row_array();
		$data['produk'] = $this->M_produk->tampilkan_data();
		$data['customer'] = $this->M_customer->tampilkan_data();
		$this->template->load('template', 'SPP/edit_data', $data);
	}

	public function edit()
	{
		$ID_SPP = $this->input->post('ID_SPP');
		$Tanggal = $this->input->post('Tanggal');
		$id_cust = $this->input->post('id_cust');
		$id_produk = $this->input->post('id_produk');
		$jml_kirim = $this->input->post('jml_kirim');
		

		
		$data = array('ID_SPP' => $ID_SPP, 'Tanggal' => $Tanggal, 'id_cust' => $id_cust, 'id_produk' => $id_produk, 'jml_kirim' => $jml_kirim);

		$simpan = $this->M_SPP->update($data, $ID_SPP);
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
				Data SPP Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('SPP');	
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['produk'] = $this->M_produk->tampilkan_data();
		$data['record'] = $this->M_SPP->tampilkan_data_detail($id);
		$this->template->load('template', 'SPP/input_data_detail', $data);
	}

	public function simpan_detail()
	{
		$id = $this->input->post('id_sj_detail');
		$id_sj = $this->input->post('id_sj');
		$id_produk = $this->input->post('id_produk');
		$qty = $this->input->post('qty');
		
		$data = array('id_sj_detail' => $id, 'id_sj' => $id_sj, 'id_produk' => $id_produk, 'qty' => $qty);
		$simpan = $this->M_SPP->simpan_detail($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Data Surat Jalan Detail Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function hapus_detail($id)
	{
		$this->M_SPP->hapus_detail($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Data Surat Jalan Detal Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}
}