<?php
include 'connexion.php';
$data = $_POST['data'];

foreach ($data as $value) {
  $sql = "DELETE FROM etudiant WHERE id='$value'";
  MySQLi_query($conn,$sql);
}
header("location:consult.php");

 ?>
