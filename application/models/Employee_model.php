<?php

class Employee_model extends CI_Model{

public function __construct(){
//  load database 
$this->load->database();



}


public function  get_employees($id=FALSE){
  
    if ($id===FALSE) {
        # code...
            $query = $this->db->get('employee');
            return $query->result_array();

    }
    $query = $this->db->get_where('employee',array('id'=>$id));
    return $query->row_array();

}

public function create_emp(){
     // this is how we get form data

     $data = array(
         'name' => $this->input->post('name'),
         'address' => $this->input->post('address'),
         'phone' => $this->input->post('phone'),
       
     );
 
     return $this->db->insert('employee', $data);
}


public function delete_emp($id){
    $this->db->where('id', $id);
     $this->db->delete('employee');
        return true;

}

    public function update_emp()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
          
        );
    
        $this->db->where('id', $this->input->post('id'));

        return $this->db->update('employee', $data);
    }
}