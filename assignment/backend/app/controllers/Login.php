<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Login extends Controller {
  public function __construct() {
      $this->rest = $this->model('_Login');
  }

  public function login() {
    echo json_encode(["MSG" => $this->rest->login(getLoginFromURL())]);
  }




  