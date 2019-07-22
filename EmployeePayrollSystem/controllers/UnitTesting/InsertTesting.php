<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertTesting extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
   $this->load->model("dashboard_model");
   $this->load->model("organization_model");
  
}

function insertTest() 
{
    //test insert for deparment from organization model
    $data = array(      
      'dep_name' => 'Managing Department'
    );
   // $organization_add = $this->organization_model->Add_Department($data);
    return $this->db->insert('department',$data);
   //return $sql;
}

public function index()
{
    echo "Using unit test library for Inserting Department on database";
    $this->load->database();
    $test = $this->insertTest('department');
    $expected_result = TRUE;
   
    $test_name = "Insert into Department";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>


