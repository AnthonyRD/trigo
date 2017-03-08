<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function user_name_validation($str){
        $this->db->where('user_name', $str);
        $this->db->limit(1);
        $query = $this->db->get("user");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_user($data = array()){
        $this->db->insert('user', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_users(){
        $this->db->select('u.id,u.user_name,u.password,u.status,e.name,
                           e.last_name,e.email,e.image_url,l.name location,ur.name role');
        $this->db->from('user u'); 
        $this->db->join('employee e', 'e.id = u.employee_id','left');
        $this->db->join('location l', 'e.location_id=l.id','left');
        $this->db->join('user_role ur', 'u.user_role_id=ur.id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function user_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function update_user($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('user', $data);
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function get_user($str){
        $this->db->select('u.id,u.user_name,u.password,u.status,e.id employee_id,e.name,
                           e.last_name,e.email,e.image_url,l.name location,ur.id role_id,ur.name role');
        $this->db->from('user u'); 
        $this->db->join('employee e', 'e.id = u.employee_id','left');
        $this->db->join('location l', 'e.location_id=l.id','left');
        $this->db->join('user_role ur', 'u.user_role_id=ur.id','left');        
        $this->db->where('u.id', $str);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function delete_user($str){
	    $this->db->where("id", $str);
	    $this->db->delete('user');
	    if ($this->db->affected_rows() > 0){
	        return TRUE;
	    }else{
	        return FALSE;
	    }
	}
}