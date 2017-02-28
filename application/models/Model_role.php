<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_role extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function role_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("user_role");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_role($data = array()){
        $this->db->insert('user_role', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }    
    public function get_roles(){        
        $query = $this->db->get('user_role');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function role_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('user_role');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function update_role($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('user_role', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_role($str){
        $this->db->limit(1);
        $this->db->where('id', $str);
        $query = $this->db->get('user_role');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function delete_role($str){
	    $this->db->where("id", $str);
	    $this->db->delete('user_role');
	    if ($this->db->affected_rows() > 0){
	        return TRUE;
	    }else{
	        return FALSE;
	    }
	}
}