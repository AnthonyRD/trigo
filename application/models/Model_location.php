<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_location extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function location_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("location");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_location($data = array()){
        $this->db->insert('location', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_locations(){
        $query = $this->db->get('location');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function location_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('location');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function update_location($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('location', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_location($str){
        $this->db->limit(1);
        $this->db->where('id', $str);
        $query = $this->db->get('location');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function delete_location($str){
	    $this->db->where("id", $str);
	    $this->db->delete('location');
	    if ($this->db->affected_rows() > 0){
	        return TRUE;
	    }else{
	        return FALSE;
	    }
	}
}