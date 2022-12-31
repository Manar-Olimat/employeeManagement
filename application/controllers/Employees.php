<?php

class Employees extends CI_Controller {

	
	public function index()
	{
		// $this->load->view('employees/index');
        $data['employees'] = $this->Employee_model->get_employees();

		$this->load->view('templates/header');
		$this->load->view('employees/index',$data);
		$this->load->view('templates/footer');
	}

	

// view single employee
	public function view($id=NULL)
	{
		// $this->load->view('employees/index');
        $data['employee'] = $this->Employee_model->get_employees($id);

		if(empty($data['employee'])){
            show_404();
        }

		$this->load->view('templates/header');
		$this->load->view('employees/view',$data);
		$this->load->view('templates/footer');
	}

}
