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
    public function update_address($data = array(), $str){
        $this->db->where('id', $str);
        $this->db->update('address', $data);
        return TRUE;
    }
    public function delete_address($str){
        $this->db->where('id', $str);
        $this->db->delete('address');
        if ($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}