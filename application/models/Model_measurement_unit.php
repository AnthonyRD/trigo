<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_measurement_unit extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function measurement_unit_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("measurement_unit");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_measurement_unit($data = array()){
        $this->db->insert('measurement_unit', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_measurement_units(){
        $query = $this->db->get('measurement_unit');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function measurement_unit_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('measurement_unit');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function update_measurement_unit($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('measurement_unit', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_measurement_unit($str){
        $this->db->limit(1);
        $this->db->where('id', $str);
        $query = $this->db->get('measurement_unit');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function delete_measurement_unit($str){
	    $this->db->where("id", $str);
	    $this->db->delete('measurement_unit');
	    if ($this->db->affected_rows() > 0){
	        return TRUE;
	    }else{
	        return FALSE;
	    }
	}
}