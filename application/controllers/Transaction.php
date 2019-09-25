<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('Form_validation');
        $this->load->helper(array('Form', 'Cookie', 'String', 'url'));
        $this->load->model('post_model');
        $this->load->model('user_model');
        $this->load->model("qbank_model");
        $this->load->model("account_model");
        $this->load->model("profile_model");
        $this->load->model("sadmin_model");
        $this->load->model('event_racing_model');
      $this->lang->load('basic', $this->config->item('language'));
    }
   public function index(){

       $data['name']='Vũ Tuấn Đạt';
        $data['email']='dat.vutuan@dtt.vn';
        $data['menhgia']=array('100.000','200.000','500.000','1.000.000');
        $data['loaithe']=array('3 tháng','6 tháng',' 1 năm ');
        $data['trangthai']='Đang xử lý';
        
        $this->load->view('transaction/index',$data);
    }

    public function napthe(){
        $data['name']='Vũ Tuấn Đạt';
        $data['email']='dat.vutuan@dtt.vn';
        $data['menhgia']=$this->input->post('menhgia');
        $data['loaithe']=$this->input->post('loaithe');
        $data['trangthai']='Đang xử lý';

        $this->load->view('transaction/napthe',$data);
    }
}