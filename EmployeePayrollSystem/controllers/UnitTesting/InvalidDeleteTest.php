<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvalidDeleteTest extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
   $this->load->model("dashboard_model");
   $this->load->model("organization_model");
  
}
      
function deleteDepartment() 
{
    //test delete from deparment from organization model
    $data = array(         
      'id' => '29'
    );
    
    $sql =  $this->db->delete('department',$data);
  // $sql =  $this->organization_model->Delete_Department($data);
   return $sql;
}

public function index()
{
    echo "Using unit test library for Invalid Deleting departmentid from Department";
    //$this->load->database();
    $test = $this->deleteDepartment('department');
    $expected_result = FALSE;
   
    $test_name = "Invalid Delete Test;";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>


