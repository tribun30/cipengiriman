<?php

class M_jadwal_kirim extends CI_model {

	public  function laporan($tanggal_jarak){
		$this->db->select('*');
		$this->db->from('jarak');
		$this->db->join('customer', 'customer.id_cust = jarak.id_cust');
		$this->db->join('jarak_detail', 'jarak_detail.id_jarak = jarak.id_jarak');
		$this->db->where('jarak.tanggal_jarak', $tanggal_jarak);
		$this->db->order_by('jarak.id_jarak', 'ASC');
		$query = $this->db->get();
		return $query;
	}

	// public  function laporan($tanggal){
	// 	$this->db->select('*');
	// 	$this->db->from('spp');
	// 	$this->db->join('customer', 'customer.id_cust = jarak.id_cust');
	// 	$this->db->where('tanggal', $tanggal);
	// 	$query = $this->db->get();
	// 	return $query;
	// }

}