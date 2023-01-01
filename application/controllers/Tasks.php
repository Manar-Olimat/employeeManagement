<?php

class Tasks extends CI_Controller {

	
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

	public function create($id)
	{
        $data['employee'] = $this->Employee_model->get_employees($id);

        	// validation rules
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'required');

		// if the form has not been submitted yet
		if ($this->form_validation->run() === FALSE) {

			//  load views
            $this->load->view('templates/header');
            $this->load->view('tasks/create_form',$data);
            $this->load->view('templates/footer');
		}

		// on submit
		else {

			$this->Task_model->create_task();
			redirect('/');


			
		}

        // echo $id;
		
	}


	
    public function delete($id){
      

        $this->Task_model->delete_task($id);

        // Set message
        // $this->session->set_flashdata('post_deleted', 'Your post has been deleted');

        redirect('/');
    }


	// public function edit($id){
       

    //     $data['employee'] = $this->Employee_model->get_employees($id);

       

    //     if(empty($data['employee'])){
    //         show_404();
    //     }

    //     // $data['title'] = 'Edit Post';

    //     $this->load->view('templates/header');
    //     $this->load->view('employees/edit', $data);
    //     $this->load->view('templates/footer');
    // }


	public function update(){
      

        $this->Task_model->update_task();

       
        redirect('/');

    }

}
