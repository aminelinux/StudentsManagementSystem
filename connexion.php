<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "baseamine";

$conn = new mysqli($host,$username,$password,$database);
if ($conn -> connect_error)
  "Connection failed".$conn -> connect_error;

 ?>
