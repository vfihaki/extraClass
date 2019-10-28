<?php

  class _Feedback {

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
    public function showAll() {
      $this->db->query('SELECT * FROM tbl_customerfeedback');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function showSingle($id) {
      $this->db->query('SELECT * FROM tbl_customerfeedback WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function add($data) {

      //Adding data to database
      $this->db->query('INSERT INTO  tbl_customerfeedback (NAMES, EMAIL, MESSAGES) VALUES (:names, :rating, :messages)');

      //Binding Variables
      $this->db->bind(':names', $data["NAMES"]);
      $this->db->bind(':rating', $data["RATING"]);
      $this->db->bind(':messages', $data["MESSAGES"]);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - update
    public function update($data, $id) {

      //Adding data to database
      $this->db->query('UPDATE tbl_feedback SET NAMES = :names, RATING = :rating, MESSAGES = :messages WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);
      $this->db->bind(':names', $data["NAMES"]).value;
      $this->db->bind(':rating', $data["RATING"]).value;
      $this->db->bind(':messages', $data["MESSAGES"]).value;

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - delete
    public function delete($id) {

      //Adding data to database
      $this->db->query('DELETE FROM tbl_customerfeedback WHERE ID = :id');

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