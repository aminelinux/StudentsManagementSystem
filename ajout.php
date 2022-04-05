<?php
include ("connexion.php");
$data = $_POST;
$n = $data['filiere_nom'];
$dep=$data['Departement'];
$nb=$data['nb_groups'];

$sql="INSERT INTO filiere (Nom,Departement,nb_groupe) VALUES ('$n','$dep','$nb')";
$res=MySQLi_query($conn,$sql);
if ($res) {
  header("location:consult.php");
} else {
  header("ajoutfilliere.php");
}
?>
