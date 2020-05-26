<?php

class M_surat_jalan extends CI_model {

	public function buat_kode()   {
        $q = $this->db->query("SELECT MAX(RIGHT(id_sj,5)) AS kd_max FROM surat_jalan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }else{
            $kd = "00001";
        }
        // date_default_timezone_set('Asia/Jakarta');
        // $kodejadi = "SPK-".date('dmy').$kd;
        $kode_sj = "SJ-".$kd;
        return $kode_sj;  
  	}

	public function tampilkan_data()
	{
		$this->db->select('*');
		$this->db->from('surat_jalan');
		$this->db->join('customer', 'customer.id_cust = surat_jalan.id_cust');
		$query = $this->db->get();
		return $query;
	}

	public function simpan($data)
	{
		$this->db->insert('surat_jalan', $data);
	}

	public function hapus($id)
	{
		$this->db->delete('surat_jalan', array('id_sj' => $id));
	}

	public function get_data($id)
	{
		$vans = array('id_sj' => $id);
		return $this->db->get_where('surat_jalan', $vans);
	}

	function update($data, $id)
	{
		$this->db->where('id_sj', $id);
		$this->db->update('surat_jalan', $data);
	}

	public function tampilkan_data_detail($id)
	{
	$hasil=$this->db->query("
		SELECT surat_jalan_detail.id_sj_detail, surat_jalan_detail.id_sj, produk.nama_produk, produk.id_produk, surat_jalan_detail.qty 
		FROM surat_jalan_detail, produk 
		WHERE surat_jalan_detail.id_produk = produk.id_produk AND surat_jalan_detail.id_sj ='$id'");
        return $hasil;
	}	

	public function simpan_detail($data)
	{
		$this->db->insert('surat_jalan_detail', $data);
	}

	public function hapus_detail($id)
	{
		$this->db->delete('surat_jalan_detail', array('id_sj_detail' => $id));
		return $this->db->get_where('surat_jalan_detail', $vans);
	}
}