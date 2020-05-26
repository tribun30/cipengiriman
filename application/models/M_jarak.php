<?php

class M_jarak extends CI_model {

	public function tampilkan_data()
	{
		$this->db->select('*');
		$this->db->from('jarak');
		$this->db->join('customer', 'customer.id_cust = jarak.id_cust');
		$this->db->order_by('id_jarak', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	public function simpan($data)
	{
		$this->db->insert('jarak', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('jarak', array('id_jarak' => $id));
	}

	public function get_data($id)
	{
		$vans = array('id_jarak' => $id);
		return $this->db->get_where('jarak', $vans);
	}

	function update($data, $id)
	{
		$this->db->where('id_jarak', $id);
		$this->db->update('jarak', $data);
	}

	public function tampilkan_data_detail($id)
	{
	$hasil=$this->db->query("
		SELECT jarak_detail.id_jd, jarak_detail.id_cust, customer.nama_cust, jarak_detail.cust_id, jarak_detail.jarak 
		FROM customer, jarak_detail
		WHERE jarak_detail.cust_id = customer.id_cust AND jarak_detail.id_cust ='$id'");
        return $hasil;
	}

	public function simpan_detail($data)
	{
		$this->db->insert('customer_detail', $data);
	}

	public function hapus_detail($id)
	{
		$this->db->delete('customer_detail', array('id_jd' => $id));
		return $this->db->get_where('customer_detail', $vans);
	}
	
}