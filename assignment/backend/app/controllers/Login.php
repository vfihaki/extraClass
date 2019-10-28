<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Login extends Controller {
  public function __construct() {
      $this->rest = $this->model('_Users');
  }

  public function index() {
    echo json_encode(["MSG" => $this->rest->default(), "CODE" => 200]);
  }
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);

// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();

// read the details of user to be edited
$stmt = $user->login();

if($stmt->rowCount() > 0){

    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username']
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}

// make it json format
print_r(json_encode($user_arr));
?>