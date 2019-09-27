<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function index(){

        $this->load->view('transaction/index');
    }

    public function napthe(){
        $data['name']='Vũ Tuấn Đạt';
        $data['email']='dat.vutuan@dtt.vn';
        $data['menhgia']='1 000 000';
        $data['loaithe']=' 1 năm ';
        $data['trangthai']='Đang xử lý';

        $this->load->view('transaction/napthe',$data);
    }

    public function manage_request() {
        $user = $this->session->userdata("logged_in");
        //kiểm tra đăng nhập
        if($user) {
            $this->load->model('transaction_model');
            $this->load->library("pagination");
            //phân trang
            $config['base_url'] = base_url()."index.php/transaction/manage_request";
            $config['total_rows'] = $this->transaction_model->countRequest();
            $config['per_page'] = 3;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-item"><a class="page-link active">';
            $config['cur_tag_close'] = '</a></li>';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['prev_link'] = '<<';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');

            $config['next_link'] = '>>';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';

            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $page = $this->uri->segment(3);
            $data['request'] = $this->transaction_model->listRequest($config['per_page'], $page);
            $data['total_rows'] = $config['total_rows'];
            if (is_null($page)) {
                $data['page'] = 0;
            } else {
                $data['page'] = $page;
            }
            $data['per_page'] = $config['per_page'];
            $data['user'] = $user;

            $this->load->view('transaction\manage_request', $data);
        } else {
            redirect(base_url().'sadmin/login');
        }
    }
}