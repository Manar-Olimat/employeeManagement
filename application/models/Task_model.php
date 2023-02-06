<?php

class Task_model extends CI_Model{

public function __construct(){
//  load database 
$this->load->database();



}


public function  get_tasks($id=FALSE){
  
  
    $query = $this->db->get_where('tasks',array('employee_id'=>$id));
    return $query->result_array();

}

public function create_task(){
     // this is how we get form data

     $data = array(
         'title' => $this->input->post('title'),
         'description' => $this->input->post('description'),
         'due_date' => $this->input->post('due_date'),
         'employee_id'=> $this->input->post('employee_id'),
       
     );
 
     return $this->db->insert('tasks', $data);
}


public function delete_task($id){
    $this->db->where('id', $id);
     $this->db->delete('tasks');
        return true;

}

public function delete_empTasks($id){
    $this->db->where('employee_id', $id);
     $this->db->delete('tasks');
        return true;

}
    public function update_task()
    {

        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'due_date' => $this->input->post('due_date'),
          
        );
    
        $this->db->where('id', $this->input->post('id'));

        return $this->db->update('tasks', $data);
    }
}