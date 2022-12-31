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
}