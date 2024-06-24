<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classmeet";

// Create connection
$c = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($c->connect_error) {
      die("Connection failed: " . $c->connect_error);
}
?>