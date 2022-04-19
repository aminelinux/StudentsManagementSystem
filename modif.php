<?php
include 'connexion.php';

$sql1 = "SELECT Nom FROM filiere";
$data1 = MySQLi_query($conn,$sql1);

$id=$_GET['id'];
$sql = "SELECT * FROM etudiant WHERE id='$id'";
$res=MySQLi_query($conn,$sql);
$row = mysqli_fetch_Assoc($res);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modification</title>
  </head>
  <body>
    <form class="" action="modifconf.php" method="post" enctype="multipart/form-data">
      <fieldset >
        <legend>Formulaire de Modification</legend>
          <label for="Matricule"> Matricule :</label><br>
          <input type="text" name="Matricule" value="<?php echo $row['Matricule'] ?>"><br><br>
          <label for="Nom">Nom :</label><br>
          <input type="text" name="Nom" value="<?php echo $row['Nom'] ?>"><br><br>
          <label for="Prenom"> Prenom :</label><br>
          <input type="text" name="Prenom" value="<?php echo $row['Prenom'] ?>"><br><br>
          <label for="Adresse"> Adresse :</label><br>
          <input type="text" name="Adresse" value="<?php echo $row['Adresse'] ?>"><br><br>
          <label for="E-mail">Email :</label><br>
          <input type="email" name="Email" value="<?php echo $row['Email'] ?>"><br><br>
          <label for="Filliere"> Filliere :</label><br>
          <select class="" name="Filliere">
            <?php while ($res1=mysqli_fetch_Assoc($data1)){
             ?>
            <option value="<?php echo $res1['Nom'] ?>" <?php if ($res1['Nom']==$row['Filiere']) {
              echo "selected";} ?>> <?php echo $res1['Nom'] ?></option>
          <?php } ?>
          </select>

          <br><br>
          <label for="DateDeNaissance"> Date De Naissance :</label><br>
          <input type="date" name="Date" value="<?php echo $row['Naissance'] ?>"><br><br>
          <label for="Password"> Password :</label><br>
          <input type="password" name="Password" value="<?php echo $row['Password'] ?>"><br><br>
          <label for="photo">photos</label>
          <input type="file" name="photos">
          <input type="hidden" name="id" value="<?php echo "$row[id]"; ?>">
          <input type="submit" name="submit" value="modifier">
      </fieldset>
    </form>
  </body>
</html>
