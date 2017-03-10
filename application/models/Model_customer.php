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
        $this->db->select('customer.id as id, customer.name, customer.last_name, customer.telephone, 
                          customer.cellphone, customer.email, customer.type, customer.origin, 
                          customer.birthdate, address.address_line_1, address.address_line_2, address.number, 
                          address.country, address.state, address.zip_code');
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
        $this->db->select('customer.id, customer.name, customer.last_name, customer.telephone, 
                           customer.cellphone, customer.email, customer.type, customer.origin, customer.birthdate, 
                           customer.address_id, address.address_line_1, address.address_line_2, address.number, 
                           address.country, address.state, address.zip_code');        
        $this->db->join('address', 'address.id = customer.address_id','right');
        $this->db->where('customer.id', $str);
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function update_customer($data = array(), $str, $str_address){
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
    public function delete_customer($str, $str_address){
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
        $this->db->select('id, name, last_name, telephone, cellphone' );
        $this->db->or_like('name', $str,'both');
        $this->db->or_like('last_name', $str,'both');
        $this->db->or_like('telephone', $str,'both');
        $this->db->or_like('cellphone', $str,'both');
        
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