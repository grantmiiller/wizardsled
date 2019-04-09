<?php
include 'logger-class.php';
include 'user-class.php';

// constants
$cookie_name = "uinfo";


$logger = new Logger();
$logger->add_action("Request for index.php");

// Grab user from cookie if it exists
if($_COOKIE[$cookie_name]) {
  $user = unserialize($_COOKIE[$cookie_name]);  
} else {
  // Populate a bunch of fake user data
  $user = new User("Grant");
  $user->add_cart(1);
  $user->add_cart(2);
  setcookie($cookie_name, serialize($user));
}

// Render site
include 'template.php';
?>
