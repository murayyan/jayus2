<?php

class Member extends CI_Controller{

	function __construct(){
		parent::__construct();
		 $this->load->model('m_member');
	}
	function editprofile(){
		$data = array(
				'id_member' => $this->session->userdata('id_member')
				);
		$this->det['hasil'] = $this->m_member->detailProfil("member",$data)->result_array();
		$this->load->view('v_memberEditProfile',$this->det);
	}
	function updateProfileData(){
		$iklan = $this->m_member->updateProfileDB();
		redirect(base_url("index.php/member/dashboard"));
	}
	function dashboard(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/member/login"));
		}
		$data = array(
				'id_member' => $this->session->userdata('id_member')
				);
		$this->det['hasil'] = $this->m_member->detailProfil("member",$data)->result_array();
		$this->load->view('v_member', $this->det);
	}
	function listiklan(){
		$iklan = $this->m_member->selectAll($this->session->userdata('id_member'));
		$this->load->view('v_memberListIklan',array('iklan'=>$iklan));
	}
	function bikiniklan(){
		$this->load->view('v_memberBikinIklan');
	}
	function editiklan($id){
		$iklan = $this->m_member->selectIklan($id);
		$this->load->view('v_memberEditIklan',array('iklan'=>$iklan));
	}
	function updateIklan(){
		$iklan = $this->m_member->updateIklan();
		redirect(base_url("index.php/member/listiklan"));
	}
	function insertIklan(){
		$iklan = $this->m_member->insert();
		redirect(base_url("index.php/member/listiklan"));
	}
	function hapusiklan($id){
		$this->m_member->delete($id);
		redirect(base_url("index.php/member/listiklan"));
	}
	function login(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("index.php/member/dashboard"));
		}
		$this->load->view('v_login');
	}

	function registered(){
		$this->load->view('v_registered');
	}
	function register(){

		$this->load->view('v_register');
	}
	function aksi_register(){
		$username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nohp = $this->input->post('nohp');
        $data = array(
            'username' => $username,
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'nohp' => $nohp,
            );
        $this->cek = $this->m_member->register("member",$data);
        if ($this->cek == 'valid') {

        	redirect(base_url("index.php/member/registered"));
		}else{
			$this->load->view('v_register', $this->cek);

		}
	}
	function aksi_login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $a = $this->m_member->getNama("member",$where)->result_array();
            foreach ($a as $i) {
            }
            $nama = $i['nama'];
        $cek = $this->m_member->cek_login("member",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $nama,
                'status' => "login",
								'id_member'=>$i['id_member']
                );

            $this->session->set_userdata($data_session);

            redirect(base_url("index.php/member/dashboard"));

        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/member/login'));
    }

}
