<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestCase extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
}

function validate_select($id) {
    $credential = array('select * from employee where id => $id');
   return 'success';
}

public function index()
{
    echo "Using unit test library for employee table";
    $test = $this->validate_select(38);
    $expected_result = ('success');
   
    $test_name = "Select query of employee";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>


