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

	public function create()
	{


		// validation rules
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');

		// if the form has not been submitted yet
		if ($this->form_validation->run() === FALSE) {

			//  load views
			$this->load->view('templates/header');
			$this->load->view('employees/create');
			$this->load->view('templates/footer');
		}

		// on submit
		else {

			$this->Employee_model->create_emp();
			redirect('/');


			
		}
	}


	
    public function delete($id){
      

        $this->Employee_model->delete_emp($id);

        // Set message
        // $this->session->set_flashdata('post_deleted', 'Your post has been deleted');

        redirect('/');
    }


	public function edit($id){
       

        $data['employee'] = $this->Employee_model->get_employees($id);
        $data['tasks'] = $this->Task_model->get_tasks($id);

		// print_r($data['tasks']);
		// die();

        if(empty($data['employee'])){
            show_404();
        }

        // $data['title'] = 'Edit Post';

        $this->load->view('templates/header');
        $this->load->view('employees/edit', $data);
        $this->load->view('templates/footer');
    }


	public function update(){
      

        $this->Employee_model->update_emp();

       
        redirect('/');

    }

}
