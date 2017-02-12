<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function category_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("product_category");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_category($data = array()){
        $this->db->insert('product_category', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_categories(){
        $query = $this->db->get('product_category');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function category_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('product_category');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function update_category($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('product_category', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_category($str){
        $this->db->limit(1);
        $this->db->where('id', $str);
        $query = $this->db->get('product_category');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function delete_category($str){
	    $this->db->where("id", $str);
	    $this->db->delete('product_category');
	    if ($this->db->affected_rows() > 0){
	        return TRUE;
	    }else{
	        return FALSE;
	    }
	}
}