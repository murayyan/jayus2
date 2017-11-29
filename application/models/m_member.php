<?php

class M_member extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	function register($table,$data){
		 if ($this->db->insert($table,$data)) {
		 	return 'valid';
		 }
		 return 'invalid';
	}
	function selectIklan($id){
		$data=$this->db->query("SELECT * FROM iklan WHERE id_iklan = '$id'");
		return $data->result_array();
	}
	function updateIklan(){
		$id_iklan = $this->input->post['id_iklan'];
		$data = array(
							 'judul_iklan' => $this->input->post('judul'),
							 'detail_iklan' => $this->input->post('deskripsi'),
							 'no_hp_iklan' => $this->input->post('nohp'),
							 'kategori' => $this->input->post('kategori'),
							 'harga' => $this->input->post('harga')
					 );
		$this->db->where('id_iklan', $id_iklan);
	  $this->db->update('iklan', $data);
	}
	function insert(){
		$data = array(
							 'id_member' => $this->session->userdata('id_member'),
							 'judul_iklan' => $this->input->post('judul'),
							 'detail_iklan' => $this->input->post('deskripsi'),
							 'no_hp_iklan' => $this->input->post('nohp'),
							 'kategori' => $this->input->post('kategori'),
							 'harga' => $this->input->post('harga')
					 );
	  $this->db->insert('iklan', $data);
	}
	function delete($id){
		$this->db->where('id_iklan', $id);
	  $this->db->delete('iklan');
	}
	function getNama($table,$where){
		return $this->db->get_where($table,$where);
	}

	function selectAll($id){
		$data=$this->db->query("SELECT * FROM iklan where id_member = '$id' ");
		return $data->result_array();
	}
}
