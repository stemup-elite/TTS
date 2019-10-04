<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('transaction_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function index() {
        $this->load->view('transaction/create_invoice');
    }

    public function send_invoice() {
        $this->form_validation->set_rules('f-name', 'Họ', 'required');
        $this->form_validation->set_rules('l-name', 'Tên', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Địa chỉ', 'required');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('f-name', form_error('f-name'));
            $this->session->set_flashdata('l-name', form_error('l-name'));
            $this->session->set_flashdata('email', form_error('email'));
            $this->session->set_flashdata('phone', form_error('phone'));
            $this->session->set_flashdata('address', form_error('address'));
            redirect(base_url().'index.php/transaction/index');
        } else {
            $name = $this->input->post('f-name').' '.$this->input->post('l-name');
            $mail = $this->input->post('email');
            $data_invoice = array(
                'name' => $this->input->post('f-name').' '.$this->input->post('l-name'),
                'email' => $this->input->post('email'),
                'phone_num' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );
            $insert_invoice = $this->transaction_model->insert_invoice($data_invoice);
            $token = md5(date('dmY').rand(100,999));
            $data_token = array(
                'token' => $token,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'invoice_id' => $insert_invoice,
            );
            $this->transaction_model->create_token($data_token);
//            redirect(base_url().'index.php/transaction/index');
            $this->send_token($token, $name, $mail);
        }
    }

    public function send_token($token, $name, $mail) {
        $data['token'] = $token;
        $data['name'] = $name;
        $data['mail']= $mail;

        $this->load->library('email');

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'vduy6220@gmail.com';
        $config['smtp_pass'] = 'rxaqeitztuibgvhe';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['starttls'] = true;
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE; // bool whether to validate email or not
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);
        $this->email->from('vduy6220@gmail.com', 'Stemup');
//        $this->email->to($mail);
        $this->email->to('vuduy6220@gmail.com');
        $this->email->subject('Token thanh toán');
        $body = $this->load->view('template_mail\send_token', $data, true);
        $this->email->message($body);
        if ($this->email->send()) {
            echo 'Success';
            echo '<a href="'.base_url().'send_mail/send'.'">Gửi lại</a>';
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function manage_invoice() {
        $user = $this->session->userdata("logged_in");
        //kiểm tra đăng nhập
        if($user) {
            $this->load->model('transaction_model');
            $this->load->library("pagination");
            //phân trang
            $config['base_url'] = base_url()."index.php/transaction/manage_invoice";
            $config['total_rows'] = $this->transaction_model->countInvoice();
            $config['per_page'] = 10;
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
            if (is_null($page)) {
                $data['page'] = 1;
            } else {
                $data['page'] = $page;
            }
            $data['invoices'] = $this->transaction_model->listInvoice($config['per_page'], min($data['page']*$config['per_page']-$config['per_page'], $config['total_rows']));
            $data['total_rows'] = $config['total_rows'];
            $data['per_page'] = $config['per_page'];
            $data['user'] = $user;

            $this->load->view('transaction\manage_invoice', $data);
        } else {
            redirect(base_url());
        }
    }

    public function create_code() {
        $code = md5($this->input->post('uid').date('dmY').rand(100,999));
        $price = $this->input->post('price');
        $data = array(
            'code' => $code,
            'type' => 0,
            'price' => $price,
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'invoice_id' => $this->input->post('iid'),
        );
        $this->transaction_model->create_code($data);
        $this->transaction_model->update_status_inv($this->input->post('iid'));
        $this->send_code($code, $price, $this->input->post('iid'));
    }

    public function send_code($code, $price, $id) {
        $data['code'] = $code;
        $data['price'] = $price;
        $data['invoice']= $this->transaction_model->get_invoice($id);

        $this->load->library('email');

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'vduy6220@gmail.com';
        $config['smtp_pass'] = 'rxaqeitztuibgvhe';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['starttls'] = true;
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE; // bool whether to validate email or not
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);
        $this->email->from('vduy6220@gmail.com', 'Stemup');
//        $this->email->to($data['invoice'][0]['email']);
        $this->email->to('vuduy6220@gmail.com');
        $this->email->subject('Code thanh toán');
        $body = $this->load->view('template_mail\send_code', $data, true);
        $this->email->message($body);
        if ($this->email->send()) {
            echo 'Success';
            echo '<a href="'.base_url().'send_mail/send'.'">Gửi lại</a>';
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function re_send_code() {
        $get_code = $this->transaction_model->get_code($this->input->post('iid'));
        $code = $get_code[0]['code'];
        $price = $get_code[0]['price'];
        $this->send_code($code, $price, $this->input->post('iid'));
    }

    public function payment() {
        $user = $this->session->userdata("logged_in");
        if($user) {
            $data['user'] = $user;
            $this->load->view('transaction\payment', $data);
        } else {
            redirect(base_url());
        }
    }

    public function send_request() {
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('token', 'Token', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('code', form_error('code'));
            $this->session->set_flashdata('token', form_error('token'));
            redirect(base_url().'index.php/transaction/payment');
        } else {
            $code_token = $this->transaction_model->get_id_code_token($this->input->post('code'), $this->input->post('token'));
            if (count($code_token['token']) == 0) {
                $this->session->set_flashdata('token', 'Token không tồn tại');
            }
            if (count($code_token['code']) == 0) {
                $this->session->set_flashdata('code', 'Code không tồn tại');
            }
            if (count($code_token['code']) == 0 || count($code_token['code']) == 0) {
                redirect(base_url().'index.php/transaction/payment');
            } else {
                if ($code_token['token'][0]['status'] == 1) {
                    $this->session->set_flashdata('token', 'Token đã được kích hoạt');
                }
                if ($code_token['code'][0]['status'] == 1) {
                    $this->session->set_flashdata('code', 'Code đã được kích hoạt');
                }
                if ($code_token['token'][0]['status'] == 1 || $code_token['code'][0]['status'] == 1) {
                    redirect(base_url().'index.php/transaction/payment');
                } else {
                    $user = $this->session->userdata("logged_in");
                    $data = array(
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        'uid' => $user['uid'],
                        'token_id' => $code_token['token'][0]['id'],
                        'code_id' => $code_token['code'][0]['id'],
                    );
                    $this->transaction_model->insert_request($data);
                    echo '<script>alert("Thanh toán thành công")</script>';
                }
            }
        }
    }
}