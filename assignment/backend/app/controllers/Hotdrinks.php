<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Hotdrinks extends Controller {
  public function __construct() {
      $this->rest = $this->model('_Hotdrinks');
  }

  public function index() {
    echo json_encode(["MSG" => $this->rest->default(), "CODE" => 200]);
  }

  //Match the functions below to your requiredments
  public function showAllHotdrinks() {
    echo json_encode(["MSG" => $this->rest->showAllHotdrinks(), "CODE" => 200]);
  }

  public function showSingleHotdrinks() {
    echo json_encode(["MSG" => $this->rest->showSingleHotdrinks(getIdFromURL())]);
  }

  public function addHotdrinks() {
      $data = json_decode(file_get_contents("php://input"), true);

      if($this->rest->addHotdrinks($data)) {
          echo json_encode(array("MSG" => "Record Added Successfully", "Data" => $data, "CODE" => 201));
      } else {
          echo json_encode(array("MSG" => "Record was not added", "Data" => $data));
      }
  }

  public function updateHotdrinks() {

    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data["ID"];

    if($this->rest->updateHotdrinks($data, $id)) {
        echo json_encode(array("MSG" => "Record Updated Successfully", "Data" => $data, "CODE" => 204));
    } else {
        echo json_encode(array("MSG" => "Record was not updated", "Data" => $data));
    }
  }

  public function deleteHotdrinks() {

    $data = json_decode(file_get_contents("php://input"), true);

    if($this->rest->delete(getIdFromURL())) {
        echo json_encode(array("MSG" => "Record Deleted Successfully", "Data" => $data, "CODE" => 202));
    } else {
        echo json_encode(array("MSG" => "Record was not deleted", "Data" => $data));
    }
  }
}