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
        $this->db->select('user.id, user.user_name, user.password,user.status,  
                          employee.name, employee.last_name, user_role.name role');
        $this->db->from('user'); 
        $this->db->join('employee', 'employee.id = user.employee_id','left');
        $this->db->join('user_role', 'user_role.id = user.user_role_id','left');
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
        $this->db->select('user.id, user.user_name,user.password,user.status,  
                          employee.id employee_id,employee.name, employee.last_name, user_role.id role_id, user_role.name role');
        $this->db->from('user'); 
        $this->db->join('employee', 'employee.id = user.employee_id','left');
        $this->db->join('user_role', 'user_role.id = user.user_role_id','left');        
        $this->db->where('user.id', $str);
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