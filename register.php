<?php
include('connexion.php');
$data = $_POST;
$matr = $data['Matricule'];
$nom = $data['Nom'];
$prenom = $data['Prenom'];
$adresse = $data['Adresse'];
$email = $data['Email'];
$filliere = $data['Filliere'];
$date = $data['Date'];
$password = $data['Password'];
//photos upload
$name = $_FILES['upload']['name'];
$tmpfile = $_FILES['upload']['tmp_name'];
$dest_File = "photos/".$name;
$extension = strrchr($name,".");
 echo $extension;
 echo '<BR>';
 $extension_autorisees = array('.jpg', '.png','.tif');
 if(in_array($extension,$extension_autorisees))
 move_uploaded_file($tmpfile,$dest_File);
 else
 echo "extension non autorise";

$sql = "SELECT Matricule FROM etudiant WHERE Matricule = '$matr'";
$res = MySQLi_query($conn,$sql);
if(MySQLi_num_rows($res) > 0){
  ?> <label style="background-color:tomato;font-family:verdana;" for="Erreur"><b>Le Matricule <?php echo "$matr"; ?> est deja Utiliser</b></label><br><?php
  include("index.php");
}else{
$sql = "INSERT INTO etudiant (Matricule,Nom,Prenom,Adresse,Filiere,Email,Naissance,Password,Photos) VALUES ('$matr','$nom','$prenom','$adresse','$filliere','$email','$date','$password','$name')";
$res = MySQLi_query($conn,$sql);
if($res)
  header("location:consult.php");
  else
    echo "Error";
}
 ?>
