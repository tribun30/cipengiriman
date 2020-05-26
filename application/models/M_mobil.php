<?php

class M_mobil extends CI_model {

	public function tampilkan_data()
	{
		return $this->db->get('mobil');
	}

	public function simpan($data)
	{
		$this->db->insert('mobil', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('mobil', array('no_mobil' => $id));
	}

	public function get_data($id)
	{
		$vans = array('no_mobil' => $id);
		return $this->db->get_where('mobil', $vans);
	}

	function update($data, $id)
	{
		$this->db->where('no_mobil', $id);
		$this->db->update('mobil', $data);
	}
	
}