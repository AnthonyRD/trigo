<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_employee extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model(array('model_address', 'model_department', 'model_position'));
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
        $department_id = $this->model_department->insert_department($data['department']);
        $position_id = $this->model_position->insert_position($data['position']);
        if ($address_id !== FALSE && $department_id !== FALSE && $position_id !== FALSE){
            unset($data['address']);
            $data['address_id'] = $address_id;
            $this->db->insert('employee', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
    }
    public function get_employees(){
        $query = $this->db->get('employee');
        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    public function get_employee($str){
        $this->db->select('a.id as id,a.id, name, lastname, telephone, cellphone, email, d.address_line_1, d.address_line_2, 
                            b.name, start_date, a.status, c.name, image_url');
        $this->db->limit(1);
        $this->db->from('employee a'); 
        $this->db->join('deparment b', 'a.deparment_id=b.id', 'left');
        $this->db->join('position c', 'c.id=a.position_id', 'left');
        $this->db->join('address d', 'd.id = employee.address_id', 'left');
        $this->db->where('employee.id', $str);        
        $query = $this->db->get('employee');
        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }
    public function update_employee($data = array(), $str, $str_address, $str_department, $str_position){
        $address = $this->model_address->update_address($data['address'], $str_address);
        $department = $this->model_department->update_address($data['department'], $str_department);
        $position = $this->model_position->update_address($data['position'], $str_position);
        if ($address){
            unset($data['address']);
            $this->db->where('id', $str);
            $this->db->update('employee', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        if ($department){
            unset($data['department']);
            $this->db->where('id', $str);
            $this->db->update('employee', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        if ($position){
            unset($data['position']);
            $this->db->where('id', $str);
            $this->db->update('employee', $data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
    public function delete_employee($str, $str_address, $str_department, $str_position){
        $address = $this->model_address->delete_address($str_address);
        $department = $this->model_department->delete_department($str_department);
        $position = $this->model_position->delete_address($str_position);
        if ($address){
            $this->db->where('id', $str);
            $this->db->delete('employee');
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        if ($department){
            $this->db->where('id', $str);
            $this->db->delete('employee');
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        if ($position){
            $this->db->where('id', $str);
            $this->db->delete('employee');
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
        
    }
    
}