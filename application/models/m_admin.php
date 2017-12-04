<?php

class M_admin extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	function getNama($table,$where){
		return $this->db->get_where($table,$where);
	}
	function selectAll(){
		$data=$this->db->query("SELECT * FROM iklan");
		return $data->result_array();
	}
	function selectAllMember(){
		$data=$this->db->query("SELECT * FROM member");
		return $data->result_array();
	}
	function deleteMember($id){
		$this->db->where('id_member', $id);
	  $this->db->delete('member');
	}
	function delete($id){
		$this->db->where('id_iklan', $id);
	  $this->db->delete('iklan');
	}
	function verifiklan($id){
		$data = array(
							 'status' => 'verified'
					 );
		$this->db->where('id_iklan', $id);
	  $this->db->update('iklan', $data);
	}
}
