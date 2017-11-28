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
		$this->load->view('v_admin');
	}

	function login(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("index.php/admin/dashboard"));
		}
		$this->load->view('v_loginAdmin');
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