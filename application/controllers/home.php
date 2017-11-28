<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

    function __construct(){
        parent::__construct();      
        $this->load->model('m_home');
    }

    function index()
    {
    	
       $this->iklan['hasil']= $this->m_home->selectIklan('iklan');
        $this->iklan['all']= $this->m_home->selectIklan('iklan');
       $this->load->view('v_home', $this->iklan);
    }
    function produk($id){
        $data = array(
            'id_iklan' => $id
            );
        $this->det['hasil'] = $this->m_home->detailProduk("iklan",$data)->result_array();
        $this->det['all']= $this->m_home->selectIklan('iklan');
        $this->load->view('v_produk', $this->det);     
    }
    function search(){
        $s = $this->input->post('search');
        $this->cari($s);
    }
    function cari($s){
        $this->src['hasil'] = $this->m_home->cariProduk($s);
        $this->load->view('v_list', $this->src);
   }
   function contact(){
        $this->load->view('v_contact');
    }
}
