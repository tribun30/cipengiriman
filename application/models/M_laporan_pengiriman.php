<?php

class M_laporan_pengiriman extends CI_model {

	public function tampilkan_data()
	{
		$this->db->select('*');
		$this->db->from('surat_jalan');
		$this->db->join('customer', 'customer.id_cust = surat_jalan.id_cust');
		$this->db->join('mobil', 'mobil.id_mobil = surat_jalan.id_mobil');
		$this->db->where('status = 0');
		$query = $this->db->get();
		return $query;
	}

	public function get_data($id)
	{
		$vans = array('id_sj' => $id);
		return $this->db->get_where('surat_jalan', $vans);
	}

	public function simpan($data, $id)
	{
		$this->db->where('id_sj', $id);
		$this->db->update('surat_jalan', $data);
	}
	
}