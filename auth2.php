<?php
include 'connexion.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM etudiant WHERE Email = '$username' and password = '$password'";
$res = MySQLi_query($conn,$sql);

if(MySQLi_num_rows($res)==1)
header('Location:consult.php');
else {
  include 'Auth.php';
  echo "error";
}

 ?>
