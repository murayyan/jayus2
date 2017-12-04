<?php

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		 $this->load->model('m_admin');
	}

	function dashboard(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/admin/login"));
		}
		$data = array(
				'username_admin' => $this->session->userdata('nama')
				);
		$this->det['hasil'] = $this->m_admin->detailProfil("admin",$data)->result_array();
		$this->load->view('v_admin', $this->det);
	}

	function login(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("index.php/admin/dashboard"));
		}
		$this->load->view('v_loginAdmin');
	}

	function listiklan(){
		$iklan = $this->m_admin->selectAll();
		$this->load->view('v_adminListIklan',array('iklan'=>$iklan));
	}
	function listmember(){
		$member= $this->m_admin->selectAllMember();
		$this->load->view('v_adminListMember',array('member'=>$member));
	}
	function hapusmember($id){
		$this->m_admin->deleteMember($id);
		redirect(base_url("index.php/admin/listmember"));
	}
	function hapusiklan($id){
		$this->m_admin->delete($id);
		redirect(base_url("index.php/admin/listiklan"));
	}
	function verifiklan($id){
		$iklan = $this->m_admin->verifiklan($id);
		redirect(base_url("index.php/admin/listiklan"));
	}
	function aksi_login(){

        $username = $this->input->post('username_admin');
        $password = $this->input->post('password_admin');
        $where = array(
            'username_admin' => $username,
            'password_admin' => md5($password)
            );
        $cek = $this->m_admin->cek_login("admin",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );

            $this->session->set_userdata($data_session);

            redirect(base_url("index.php/admin/dashboard"));

        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/admin/login'));
    }
}
