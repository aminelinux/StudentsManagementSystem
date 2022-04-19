<?php
Session_Start();
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
if(isset($_FILES['photos']))
{
  $name = $_FILES['photos']['name'];
  $tmpfile = $_FILES['photos']['tmp_name'];
  $dest_File = "photos/".$name;
  $extension = strrchr($name,".");
  $extension_autorisees = array('.jpg', '.png','.tif');
 if(in_array($extension,$extension_autorisees)){
 move_uploaded_file($tmpfile,$dest_File);
 $_SESSION['Photo'] = $name;
}
 else
 echo "extension non autorise";
 
} else {
  $sql="SELECT Photos FROM etudiant WHERE id='$id'";
  $res = MySQLi_query($conn,$sql);
  $data = mysqli_fetch_Assoc($res);
  $name=$data['Photos'];
}
$sql = "UPDATE etudiant SET Matricule ='$matr',Nom ='$nom',Prenom ='$prenom',Adresse ='$adresse',Email ='$email',Filiere='$filliere',Naissance='$date',Password='$password',Photos='$name' WHERE id='$id'";
if(MySQLi_query($conn,$sql))
  header("location:consult.php");
else
  echo "error";

 ?>
