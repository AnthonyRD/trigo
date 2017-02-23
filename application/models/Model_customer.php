<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('model_address');
    }
    public function customer_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("customer");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function customer_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_customer($data = array()){
        $address_id = $this->model_address->insert_address($data['address']);
        if ($address_id !== FALSE){
            unset($data['address']);
            $data['address_id'] = $address_id;
            $this->db->insert('customer', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }
    public function get_customers(){
        $this->db->join('address', 'customer.address_id = address.id');
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_customer($str){
        $this->db->limit(1);
        $this->db->where('customer.id', $str);
        $this->db->join('address', 'address.id = customer.address_id');
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function update_supplier($data = array(), $str, $str_address){
        $address = $this->model_address->update_address($data['address'], $str_address);
        if ($address){
            unset($data['address']);
            $this->db->where('id', $str);
            $this->db->update('customer', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
    public function delete_supplier($str, $str_address){
        $address = $this->model_address->delete_address($str_address);
        if ($address){
            $this->db->where('id', $str);
            $this->db->delete('customer');
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
        
    }
    public function get_search_customer($str){
        $this->db->select('id, name');
        $this->db->like('name', $str, 'both');
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_id($str){
        $this->db->where('name', $str);
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0){
            return $query->row()->id;
        }else{
            return FALSE;
        }
    }
    
}