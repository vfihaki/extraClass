<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Food extends Controller {
  public function __construct() {
      $this->rest = $this->model('_Food');
  }

  public function index() {
    echo json_encode(["MSG" => $this->rest->default(), "CODE" => 200]);
  }

  //Match the functions below to your requiredments
  public function showAllFood() {
    echo json_encode(["MSG" => $this->rest->showAllFood(), "CODE" => 200]);
  }

  public function showSingleFood() {
    echo json_encode(["MSG" => $this->rest->showSingle(getIdFromURL())]);
  }

  public function addFood() {
      $data = json_decode(file_get_contents("php://input"), true);

      if($this->rest->addFood($data)) {
          echo json_encode(array("MSG" => "Record Added Successfully", "Data" => $data, "CODE" => 201));
      } else {
          echo json_encode(array("MSG" => "Record was not added", "Data" => $data));
      }
  }

  public function updateFood() {

    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data["ID"];

    if($this->rest->updateFood($data, $id)) {
        echo json_encode(array("MSG" => "Record Updated Successfully", "Data" => $data, "CODE" => 204));
    } else {
        echo json_encode(array("MSG" => "Record was not updated", "Data" => $data));
    }
  }

  public function deleteFood() {

    $data = json_decode(file_get_contents("php://input"), true);

    if($this->rest->deleteFood(getIdFromURL())) {
        echo json_encode(array("MSG" => "Record Deleted Successfully", "Data" => $data, "CODE" => 202));
    } else {
        echo json_encode(array("MSG" => "Record was not deleted", "Data" => $data));
    }
  }
}