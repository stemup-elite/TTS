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

}