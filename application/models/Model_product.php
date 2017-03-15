<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_product extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function product_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("supplier");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function product_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('product');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_products(){
        $this->db->select('product.id as id, product.name, product.price, product.description, product.charge_tax, 
                           product.image_url, product.measurement_unit_id, product.reorder_level, product.entry_date, 
                           product.last_entry, supplier.name as suppier_name, product_category.name as name_category');
        $this->db->from('product'); 
        $this->db->join('supplier', 'product.suplier_id=supplier.id', 'left');
        $this->db->join('product_category', 'product.id_category=product_category.id', 'left');
        $this->db->join('measurement_unit', 'product.measurement_unit_id=measurement_unit.id', 'left');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function insert_product($data = array()){
        $this->db->insert('product', $data);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_product($str){        
        $this->db->select('product.id as id, product.name, product.price, product.description, product.charge_tax, 
                           product.image_url, product.measurement_unit_id, product.reorder_level, product.entry_date, 
                           product.last_entry, supplier.name as suppier_name, product_category.name as name_category');
        $this->db->from('product'); 
        $this->db->join('supplier', 'product.suplier_id=supplier.id', 'left');
        $this->db->join('product_category', 'product.id_category=product_category.id', 'left');
        $this->db->join('measurement_unit', 'product.measurement_unit_id=measurement_unit.id', 'left');
        $this->db->limit(1);
        $this->db->where('product.id', $str);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function update_product($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('product', $data);   
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function delete_product($str){
        $this->db->where('id', $str);
        $this->db->delete('product');
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_ajax_products($str, $category){
        if ($str != ""){
            $this->db->like('product.name', trim($str));
        }
        if ($category != ""){
            $this->db->where('product_category.name', trim($category));
        }
        $this->db->select('product.id as id, product.name, product.price, product.description, product.charge_tax, 
                           product.image_url, product.measurement_unit_id, product.reorder_level, product.entry_date, 
                           product.last_entry, supplier.name as suppier_name, product_category.name as name_category');
        $this->db->from('product'); 
        $this->db->join('supplier', 'product.suplier_id=supplier.id', 'left');
        $this->db->join('product_category', 'product.id_category=product_category.id', 'left');
        $this->db->join('measurement_unit', 'product.measurement_unit_id=measurement_unit.id', 'left');
        $query = $this->db->get();        
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
}