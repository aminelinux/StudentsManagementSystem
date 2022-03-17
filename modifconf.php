<?php
include 'connexion.php';


$matr = $_POST['Matricule'];
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$adresse = $_POST['Adresse'];
$email = $_POST['Email'];
$filliere = $_POST['Filliere'];
$date = $_POST['Date'];
$password = $_POST['Password'];
$id=$_POST['id'];
$sql = "UPDATE etudiant SET Matricule ='$matr',Nom ='$nom',Prenom ='$prenom',Adresse ='$adresse',Email ='$email',Filiere='$filliere',Naissance='$date',Password='$password' WHERE id='$id'";
if(MySQLi_query($conn,$sql))
  header("location:consult.php");
else
  echo "error";

 ?>
