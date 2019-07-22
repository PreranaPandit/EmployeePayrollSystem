<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckStringTest extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->library("Unit_test");
   $this->load->model("login_model");
}

function string_test() {
    $credential = 'prerana@gmail.com';
   return $credential;
}

public function index()
{
    echo "Using unit test library for checking string";
    $test = $this->string_test();
    $expected_result = 'is_string';
   
    $test_name = "String Test through email-id";
    echo $this->unit->run($test,$expected_result,$test_name);
}
}
?>

