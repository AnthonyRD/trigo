<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_address extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insert_address($data = array()){
        $this->db->insert("address", $data);
        if ($this->db->affected_rows() > 0){
            return $this->db->insert_id();
        }else{
            return FALSE;
        }
    }
}