<?php
include 'connexion.php';
$id=$_GET['id'];
$sql = "DELETE FROM etudiant WHERE id='$id'";
if(MySQLi_query($conn,$sql))
  header("location:consult.php");
  else {
    echo "error";
  }
 ?>
