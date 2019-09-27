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
        $this->db->select("*");
        $this->db->from("payment_request pr");
        $this->db->join("payment_invoices pi", "pr.invoice_id = pi.id", "left");
        $this->db->join("payment_token pt", "pr.token_id = pt.id", "left");
        $this->db->join("payment_code pc", "pr.code_id = pc.id", "left");
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }
}