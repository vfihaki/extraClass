  <?php

  class _Food {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    /////////////////////////////////////////////////
    //////////////// EXAMPLES ///////////////////////
    /////// YOU SHOULD DELETE THESE AFTER ///////////
    /////////////////////////////////////////////////

    //example: static data
    public function default() {
      return "No param given...";
    }

    //example: db data - select
    public function showAllFood() {
      $this->db->query('SELECT * FROM tbl_food');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function showSingleFood($id) {
      $this->db->query('SELECT * FROM tbl_food WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function addFood($data) {

      //Adding data to database
      $this->db->query('INSERT INTO  tbl_food (FOOD, PRICE) VALUES (:food, :price)');

      //Binding Variables
      $this->db->bind(':food', $data["FOOD"]);
      $this->db->bind(':price', $data["PRICE"]);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - update
    public function updateFood($data, $id) {

      //Adding data to database
      $this->db->query('UPDATE tbl_food SET FOOD = :food, PRICE = :price WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);
      $this->db->bind(':food', $data["FOOD"]).value;
      $this->db->bind(':price', $data["PRICE"]).value;

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - delete
    public function deleteFood($id) {

      //Adding data to database
      $this->db->query('DELETE FROM tbl_food WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }
  }
?>