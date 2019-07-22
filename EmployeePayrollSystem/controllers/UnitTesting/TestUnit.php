<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestUnit extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
}

function validate_login() {
    $credential = array('em_email' => 'prerana@gmail.com', 'em_password' => 'password','status' => 'ACTIVE');
   return $credential;
}

public function index()
{
    echo "Using unit test library for user login";
    $test = $this->validate_login();
    $expected_result = 'is_array';
   
    $test_name = "LogIn Test through email-id and password";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>

