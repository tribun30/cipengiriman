<?php

class M_spp extends CI_model {

	public function tampilkan_data()
	{
		$this->db->select('*');
		$this->db->from('spp');
		$this->db->join('customer', 'customer.id_cust = spp.id_cust');
		$this->db->join('produk', 'produk.id_produk = spp.id_produk');
		$this->db->order_by('ID_SPP', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	public function simpan($data)
	{
		$this->db->insert('spp', $data);
	}

	public function hapus($ID_SPP)
	{
		$this->db->delete('spp', array('ID_SPP' => $ID_SPP));
	}

	public function get_data($ID_SPP)
	{
		$vans = array('ID_SPP' => $ID_SPP);
		return $this->db->get_where('spp', $vans);
	}

	function update($data, $ID_SPP)
	{
		$this->db->where('ID_SPP', $ID_SPP);
		$this->db->update('spp', $data);
	}

	public function tampilkan_data_detail($ID_SPP)
	{
	$hasil=$this->db->query("
		SELECT spp_detail.ID_SPP_detail, spp_detail.ID_SPP, produk.nama_produk, produk.id_produk, spp_detail.qty 
		FROM spp_detail, produk 
		WHERE spp_detail.id_produk = produk.id_produk AND spp_detail.ID_SPP ='$ID_SPP'");
        return $hasil;
	}	

	public function simpan_detail($data)
	{
		$this->db->insert('spp_detail', $data);
	}

	public function hapus_detail($ID_SPP)
	{
		$this->db->delete('spp_detail', array('ID_SPP_detail' => $ID_SPP));
		return $this->db->get_where('spp_detail', $vans);	}
}