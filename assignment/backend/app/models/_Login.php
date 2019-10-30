<?php

  class _Colddrinks {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //example: static data
    public function default() {
      return "No param given...";
    }

    public function login() {
      $this->db->query('SELECT password FROM tbl_user');
    }

  }