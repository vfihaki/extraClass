<?php

  class _Colddrinks {

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
    public function showAllColddrinks() {
      $this->db->query('SELECT * FROM tbl_colddrinks');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function showSingleColddrinks($id) {
      $this->db->query('SELECT * FROM tbl_colddrinks WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function addColddrinks($data) {

      //Adding data to database
      $this->db->query('INSERT INTO  tbl_colddrinks (COLDDRINKS, LARGE, MEDIUM, SMALL) VALUES (:colddrinks, :large, :medium, :small)');

      //Binding Variables
      $this->db->bind(':colddrinks', $data["COLDDRINKS"]);
      $this->db->bind(':large', $data["LARGE"]);
      $this->db->bind(':medium', $data["MEDIUM"]);
      $this->db->bind(':small', $data["SMALL"]);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - update
    public function updateColddrinks($data, $id) {

      //Adding data to database
      $this->db->query('UPDATE tbl_colddrinks SET COLDDRINKS = :colddrinks, LARGE = :large, MEDIUM = :medium, SMALL = :small WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);
      $this->db->bind(':colddrinks', $data["COLDDRINKS"]).value;
      $this->db->bind(':large', $data["LARGE"]).value;
      $this->db->bind(':medium', $data["MEDIUM"]).value;
      $this->db->bind(':small', $data["SMALL"]).value;

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - delete
    public function deleteColddrinks($id) {

      //Adding data to database
      $this->db->query('DELETE FROM tbl_colddrinks WHERE ID = :id');

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