<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvalidNameTest extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
}

private function getName($email) {
    
   return $this->login_model->getEmailName($email);
}

public function index()
{
    echo "Using unit test library for Invalid email from table employee";
    $test = $this->getName(23456);
    $expected_result = TRUE;
   
    $test_name = "INVALID GET NAME TEST";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>

