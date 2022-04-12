<?php
Session_Start();
include 'connexion.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM etudiant WHERE Email = '$username' and password = '$password'";
$res = MySQLi_query($conn,$sql);
$data = mysqli_fetch_Assoc($res);
if(MySQLi_num_rows($res)==1){
  $_SESSION['username'] = $username ;
  $_SESSION['password'] = $password;
  $_SESSION['nom'] = $data['Nom'];
  $_SESSION['prenom'] = $data['Prenom'];
  $_SESSION['id'] = $data['id'];
header('Location:consult.php');

}else {
  include 'Auth.php';
  echo "error";
}

 ?>
