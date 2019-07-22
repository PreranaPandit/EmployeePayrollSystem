<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetNameTest extends CI_Controller {

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
    echo "Using unit test library for GetName from table employee";
    $test = $this->getName("prerana@gmail.com");
    $expected_result = TRUE;
   
    $test_name = "GET NAME TEST";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>

