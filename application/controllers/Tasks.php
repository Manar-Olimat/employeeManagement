<?php

class Tasks extends CI_Controller {

	
	
	


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
			redirect(base_url().'employees/edit/'.$id);


			
		}

        // echo $id;
		
	}


	
    public function delete($id){
      

        $this->Task_model->delete_task($id);

        redirect('/');
    }


	
	public function update(){
      

        $this->Task_model->update_task();

       
        redirect('/');

    }

}
