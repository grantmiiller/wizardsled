<?php
  class User {
    public $username;
    public $cart = [];

    public function __construct($username) {
      $this->username = $username;
    }

    public function add_cart($item) {
      array_push($this->cart, $item);
    }
  }


?>
