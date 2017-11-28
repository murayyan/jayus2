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
	function getNama($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}