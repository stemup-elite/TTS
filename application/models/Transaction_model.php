<?php


class Transaction_model extends CI_Model
{
    public function countRequest() {
        return $this->db->count_all('payment_request');
    }

    public function listRequest($record, $start) {
        $this->db->limit($record, $start);
//        $query = $this->db->get("payment_request");
//        return $query->result_array();
//        $this->db->select("*");
//        $this->db->from("payment_request pr");
//        $this->db->join("payment_invoices pi", "pr.invoice_id = pi.id", "left");
//        $this->db->join("payment_token pt", "pr.token_id = pt.id", "left");
//        $this->db->join("payment_code pc", "pr.code_id = pc.id", "left");
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return null;
        }
    }

    public function insert_invoice($data) {
        $this->db->insert('payment_invoices', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function create_token($data) {
        $this->db->insert('payment_token', $data);
    }

    public function create_code($data) {
        $this->db->insert('payment_code', $data);
    }

    public function update_status_inv($id) {
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('payment_invoices');
    }

    public function countInvoice() {
        return $this->db->count_all('payment_invoices');
    }

    public function listInvoice($record, $start) {
        $this->db->limit($record, $start);
        $query = $this->db->get("payment_invoices");
        if($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }

    public function get_invoice($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('payment_invoices');
        return $query->result_array();
    }

    public function get_code($id) {
        $this->db->where('invoice_id', $id);
        $query = $this->db->get('payment_code');
        return $query->result_array();
    }

    public function get_id_code_token($code, $token) {
        $this->db->where('code', $code);
        $query_code = $this->db->get('payment_code');
        $this->db->where('token', $token);
        $query_token = $this->db->get('payment_token');
        return array(
            'code' => $query_code->result_array(),
            'token' => $query_token->result_array(),
        );
    }

    public function insert_request($data) {
        $this->db->insert('payment_request', $data);
        $this->update_status_code($data['code_id']);
        $this->update_status_token($data['token_id']);
    }
     public function update_status_code($code_id) {
         $this->db->set('status', 1);
         $this->db->where('id', $code_id);
         $this->db->update('payment_code');
     }

     public function update_status_token($token_id) {
         $this->db->set('status', 1);
         $this->db->where('id', $token_id);
         $this->db->update('payment_token');
     }
}