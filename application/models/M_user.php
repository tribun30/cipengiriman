<?php

class M_user extends CI_model {

	public function tampilkan_data()
	{
		return $this->db->get('user');
	}

	public function simpan($data)
	{
		$this->db->insert('user', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('user', array('id_user' => $id));
	}

	public function get_data($id)
	{
		$vans = array('id_user' => $id);
		return $this->db->get_where('user', $vans);
	}

	function update($data, $id)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

	function login($nama_user,$password)
	{
		$chek=	$this->db->get_where('user',array('nama_user'=>$nama_user,'password'=>$password));
		
		// untuk check data nama user dan password ada atau tidak
		if ($chek->num_rows()>0) 
		{
			return 1;
		}
		else {
			return 0;
		}
	}
	
}