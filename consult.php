<?php
include('connexion.php');

$sql = "SELECT * FROM etudiant";
$data = MySQLi_query($conn,$sql);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consulte</title>
    <style media="screen">
      h1{
        align-self: center;
        font-family: fantasy

      }

      #body1{
        align-content: center;

      }
    </style>
  </head>
  <body id="body1">
    <h1>Liste des Etudiant</h1>
    <a href="index.php"><button type="button" name="Ajouter Etudiant">Ajouter Etudiant</button></a>
    <a href="ajoutfiliere.php"><button type="button" name="Ajouter Filliere">Ajouter Filliere</button></a>
    <table>
      <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse</th>
        <th>Filliere</th>
        <th>Naissance</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        <th>SuppMultiple</th>
      </tr>
      <?php while ($row=mysqli_fetch_Assoc($data)) { ?>
        <tr>
          <td><?php echo $row['Matricule'] ?></td>
          <td><?php echo $row['Nom'] ?></td>
          <td><?php echo $row['Prenom'] ?></td>
          <td><?php echo $row['Adresse'] ?></td>
          <td><?php echo $row['Filliere'] ?></td>
          <td><?php echo $row['Naissance'] ?></td>
          <td><?php echo $row['Email'] ?></td>
          <td><?php echo $row['Password'] ?></td>
          <td>
            <a href="#"><button type="button" name="Modifier">Modifier</button></a>
            <a href="#"><button type="button" name="Supprimer">Supprimer</button></a>
          </td>
        </tr>

      <?php } ?>
    </table>
  </body>
</html>
