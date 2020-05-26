<?php

class M_produk extends CI_model {

	public function tampilkan_data()
	{
		return $this->db->get('produk');
	}

	public function simpan($data)
	{
		$this->db->insert('produk', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('produk', array('id_produk' => $id));
	}

	public function get_data($id)
	{
		$vans = array('id_produk' => $id);
		return $this->db->get_where('produk', $vans);
	}

	function update($data, $id)
	{
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}
	
}