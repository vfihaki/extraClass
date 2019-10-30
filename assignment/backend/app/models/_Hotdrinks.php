<?php

  class _Hotdrinks {

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
    public function showAllHotdrinks() {
      $this->db->query('SELECT * FROM tbl_hotdrinks');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function showSingleHotdrinks($id) {
      $this->db->query('SELECT * FROM tbl_hotdrinks WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function addHotdrinks($data) {

      //Adding data to database
      $this->db->query('INSERT INTO  tbl_hotdrinks (HOTDRINKS, LARGE, MEDIUM, SMALL) VALUES (:hotdrinks, :large, :medium, :small)');

      //Binding Variables
      $this->db->bind(':hotdrinks', $data["HOTDRINKS"]);
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
    public function updateHotdrinks($data, $id) {

      //Adding data to database
      $this->db->query('UPDATE tbl_hotdrinks SET HOTDRINKS = :hotdrinks, LARGE = :large, MEDIUM = :medium, SMALL = :small WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);
      $this->db->bind(':hotdrinks', $data["HOTDRINKS"]).value;
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
    public function deleteHotdrinks($id) {

      //Adding data to database
      $this->db->query('DELETE FROM tbl_hotdrinks WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function removePerson() {
      $id = myTryParse($_GET['url']);
      if($id > 0) {
          if($this->people->removePerson($id)) {
              //Redirect to home page
              header("Location: ".URLROOT."frontend/adminmenu");
              exit;
          }
      }
    }
  }
?>