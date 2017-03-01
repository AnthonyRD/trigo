<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	private $page_config = array();
	public function __construct(){
		parent::__construct();
		$this->page_config = array(
	        'title' => "Editar Empleado",
	        'title_page' => "Editar Empleado",
	        'view_content' => "employees/edit",
	        'css' => array(
	            'css/skins/_all-skins.min.css',
	            'css/style.css'
	        ),
	        'plugin_css' => array(
	            'datatables/dataTables.bootstrap.css',
	            'iCheck/square/blue.css'
	        ),
	        'plugin_js' => array(
	        	'fastclick/fastclick.js',
	        	'datatables/jquery.dataTables.min.js',
	        	'datatables/dataTables.bootstrap.min.js',
	        	'iCheck/icheck.min.js'
	        ),
	        'js' => array(
	            'js/app.min.js',
	            'js/demo.js',
	            'js/config/dataTables.js',
	            'js/config/iCheck.js'
	        ),
	        'sidebar_menu'=> true
	    );
	    $this->load->library("template");
	    $this->load->helper("form");
	    $this->load->library("form_validation");
	    $this->form_validation->set_error_delimiters('<section class="alert alert-danger">', '</section>');
	}
	public function index($str = NULL)
	{
	    if (!is_null($str)){
	        $this->load->model(array('model_department','model_position', 'model_employee'));
	        $data = array(
    	        'position' => $this->model_position->get_positions(),
    	        'department' => $this->model_department->get_departments(),
    	        'data' => $this->model_employee->get_employee($str)
    	    );
	        $this->page_config += $data;
	    }else{
	        redirect('employees');
	    }
	    $this->template->view($this->page_config);
	}
	public function confirm(){
	    $this->form_validation->set_rules('id', 'employee', 'callback_id_isExisted');
		$this->form_validation->set_rules('address_id', 'address', 'callback_id_isExisted');
	    if ($this->form_validation->run() === FALSE){
	    	$this->session->set_flashdata('error', true);
	        redirect('employee/edit/'.$this->input->post('id'));
	    }else{
	        $this->session->set_flashdata('employee_success', false);
	        redirect('employees');
	    }
	}
	public function id_isExisted($str){
        if (empty($_FILE['image_url'])){
            return $this->update_employee();
        }else{
            return do_upload();
        }
	}
    public function do_upload()
    {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
    
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image_url'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    return FALSE;
            }
            else
            {
                    $this->image_url = $this->upload->data();
                    
                    return $this->update_employee();
            }
    }
	public function update_employee(){
	    $this->load->model('model_employee');
        $data = array(
	        'name' => $this->input->post('employee_name'),
	        'last_name' => $this->input->post('last_name'),
			'telephone' => $this->input->post('telephone'),
			'cellphone' => $this->input->post('cellphone'),
			'email' => $this->input->post('email'),			
			'status' => $this->input->post('status'),	        
	        'department_id' => $this->input->post('department'),
			'position_id' => $this->input->post('position'),			
	        'start_date' => date('Y-m-d H:i:s'),
	        'address' => array(
	            'address_line_1' => $this->input->post('address_1'),
	            'address_line_2' => $this->input->post('address_2'),
	            'number' => $this->input->post('number'),
	            'country' => $this->input->post('country'),
	            'state' => $this->input->post('state'),
	            'zip_code' => $this->input->post('zip_code')
		 ));
	    if (is_null($this->image_url)) unset($data['image_url']);
	    if ($this->model_employee->update_employee($data, $this->input->post("id"), $this->input->post('address_id'))){
	        $this->session->set_flashdata('employee_success',true);
	        redirect('employees');
	    }
	    return FALSE;
	}
}