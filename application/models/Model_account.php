<?php

Class   Model_account extends CI_Model {
    public function __construct(){
        parent::__construct();
        //$this->load->database();
        $this->load->model('model_user');
    }

// Insert registration data in database
public function registration_insert($data) {
    // Query to check whether username already exist or not
    $condition = "user_name =" . "'" . $data['user_name'] . "'";
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {
        // Query to insert data in database
        $this->db->insert('user', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        } else {
        return false;
    }
}

// Read data using username and password
public function login($data) {

    $condition = "user_name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get(    );

    if ($query->num_rows() == 1) {
        return true;
    } else {
        return false;
    }
}

// Read data from database to show data in admin page
public function read_user_information($username) {

    $condition = "user.user_name =" . "'" . $username . "'";
    $this->db->select('user.id,user.user_name,user.password,user.status,employee.id employee_id,employee.name,
                       employee.last_name,employee.email,employee.image_url,location.name location,
                       user_role.id role_id,user_role.name role');
    $this->db->from('user'); 
    $this->db->join('employee', 'employee.id = user.employee_id','left');
    $this->db->join('location', 'employee.location_id=location.id','left');
    $this->db->join('user_role', 'user.user_role_id=user_role.id','left');            
    $this->db->where($condition);
    
    $this->model_user->limit(1);
    $query = $this->model_user->get();

    if ($query->num_rows() == 1) {
        return $query->result();
    } else {
        return false;
    }
}

}

?>
