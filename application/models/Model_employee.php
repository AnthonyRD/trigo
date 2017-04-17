<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_employee extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('model_address');
    }
    public function employee_name_validation($str){
        $this->db->where('name', $str);
        $this->db->limit(1);
        $query = $this->db->get("employee");
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function employee_id_isExisted($str){
        $this->db->where('id', $str);
        $query = $this->db->get('employee');
        if ($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function insert_employee($data = array()){
        $address_id = $this->model_address->insert_address($data['address']);
        if ($address_id !== FALSE){
            unset($data['address']);
            $data['address_id'] = $address_id;
            $this->db->insert('employee', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }
    public function get_employees(){
    $this->db->select('a.id as employee_id, a.name employee_name, a.last_name, a.telephone, a.cellphone, a.email, 
                           a.start_date,a.image_url, a.status employee_status, b.name department_name, c.name position_name,
                           d.address_line_1, d.address_line_2, d.state, d.zip_code, d.country, d.number');        
        $this->db->from('employee a'); 
        $this->db->join('department b', 'a.department_id=b.id', 'left');
        $this->db->join('position c', 'c.id=a.position_id', 'left');
        $this->db->join('address d', 'd.id = a.address_id', 'left');          
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_employee($str){
        $this->db->select('a.id as employee_id, a.name employee_name, a.last_name, a.telephone, a.cellphone, a.email, 
                           a.start_date,a.image_url, a.status employee_status, b.id department_id, b.name department_name, c.id position_id,c.name position_name,
                           d.id address_id, d.address_line_1, d.address_line_2, d.state, d.zip_code, d.country, d.number');
        $this->db->limit(1);
        $this->db->from('employee a'); 
        $this->db->join('department b', 'a.department_id=b.id', 'left');
        $this->db->join('position c', 'c.id=a.position_id', 'left');
        $this->db->join('address d', 'd.id = a.address_id', 'left');
        $this->db->where('a.id', $str);        
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function update_employee($data = array(), $str, $str_address){
        $address = $this->model_address->update_address($data['address'], $str_address);
        if ($address){
            unset($data['address']);
            $this->db->where('id', $str);            
            $this->db->update('employee', $data);            
            if ($address || $this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
    public function delete_employee($str, $str_address){
        $address = $this->model_address->delete_address($str_address);
        if ($address){
            $this->db->where('id', $str);
            $this->db->delete('employee');
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
        
    }
    
}