<?php

class M_customer extends CI_model {

	public function tampilkan_data()
	{
		return $this->db->get('customer');
	}

	public function simpan($data)
	{
		$this->db->insert('customer', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('customer', array('id_cust' => $id));
	}

	public function get_data($id)
	{
		$vans = array('id_cust' => $id);
		return $this->db->get_where('customer', $vans);
	}

	function update($data, $id)
	{
		$this->db->where('id_cust', $id);
		$this->db->update('customer', $data);
	}

	public function tampilkan_data_detail($id)
	{
	$hasil=$this->db->query("
		SELECT customer_detail.id_cd, customer_detail.id_cust, customer.nama_cust, customer_detail.cust_id, customer_detail.jarak 
		FROM customer, customer_detail
		WHERE customer_detail.cust_id = customer.id_cust AND customer_detail.id_cust ='$id'");
        return $hasil;
	}

	public function simpan_detail($data)
	{
		$this->db->insert('customer_detail', $data);
	}

	public function hapus_detail($id)
	{
		$this->db->delete('customer_detail', array('id_cd' => $id));
		return $this->db->get_where('customer_detail', $vans);
	}
	
}