<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginTest extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
  
}

function validate_login($email, $password) 
{
   return $this->login_model->login($email, sha1($password));
}

public function index()
{
    echo "Using unit test library for Failed Login";
    $test = $this->validate_login("prerana@gmail.com","sasdfgh");
    $expected_result = TRUE;
   
    $test_name = "LogIn Failed test through email-id and password";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>

