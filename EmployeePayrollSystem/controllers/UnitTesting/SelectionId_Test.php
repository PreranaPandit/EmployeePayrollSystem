<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectionId_Test extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("employee_model");
}

function validate_select($id) {
    $credential = array('select id from employee where id => $id');
   return $id;
}

public function index()
{
    echo "Using unit test library for selection of id from employee table";
    $test = $this->validate_select(38);
    $expected_result = 38;
   
    $test_name = "Select id from employee table";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>


