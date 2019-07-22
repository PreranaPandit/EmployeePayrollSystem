<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateDepartmentTest extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
   $this->load->model("dashboard_model");
   $this->load->model("organization_model");
  
}
      
function updateDepartment($id) 
{
    //test update for deparment from organization model
    $data = array(  
       
      'dep_name' => 'Managing Department'
    );
    
    $sql =  $this->db->update('department',$data,29);
   // $sql =  $this->organization_model->Update_Department(29,$data);
   return $sql;
}

public function index()
{
    echo "Using unit test library for Updating Department on database";
    //$this->load->database();
    $test = $this->updateDepartment('department');
    $expected_result = TRUE;
   
    $test_name = "Update DepartmentName in Department Table";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>


