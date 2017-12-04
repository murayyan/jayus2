<?php

class M_home extends CI_Model{

	function selectIklan($table)
	{
		$this->db->order_by('rand()');
    	$this->db->limit(4);
    	$query = $this->db->get_where($table,array('status'=>"Verified"));
    	return $query->result_array();
	}
	function detailProduk($table,$where){
		return $this->db->get_where($table,$where);
	}
	function cariProduk($find){
        $query = $this->db->query("SELECT * FROM iklan WHERE judul_iklan LIKE '%$find%' AND status ='Verified'");
        return $query->result_array();
	}

}
