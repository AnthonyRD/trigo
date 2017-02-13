<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_supplier extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('model_address');
    }
    public function category_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("supplier");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_supplier($data = array()){
        $address_id = $this->model_address->insert_address($data['address']);
        if ($address_id !== FALSE){
            unset($data['address']);
            $data['address_id'] = $address_id;
            $this->db->insert('supplier', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }
    public function get_suppliers(){
        $query = $this->db->get('supplier');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_supplier($str){
        $this->db->select('address.id as aid,supplier.id, name, RNC, email, address.address_line_1, address.address_line_2, contact_name, Details, address.zip_code, address.country, address.state, telephone, cellphone, address.number');
        $this->db->limit(1);
        $this->db->where('supplier.id', $str);
        $this->db->join('address', 'address.id = supplier.address_id');
        $query = $this->db->get('supplier');
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
            $this->db->update('supplier', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
}