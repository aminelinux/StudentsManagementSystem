<?php
include("connexion.php");
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
        font-family: fantasy;
        text-align: center;
        color: #405c32;

      }
      #button1,#button2{
        display: inline-block;
        width: 100px;

        padding: 5px;
        border: 1px solid blue;

      }
      #button3{
        display: inline-block;
        align-self: center;
        height: 40px;
        width: 300px;
      }
      #background2{
        background-color: #dff0c9;
        align: center;
      }
      #div1{
        align-content: center;
        padding: 1em;
        align-self: center;
        align-items: center;
        text-align: center;
      }
      th{
        background-color: tomato;
        color: white;
      }
      tr{
        background-color: brown;
        color: white;
      }
    </style>
  </head>
  <body id="background2">
    <div id="div1">
      <h1>Liste des Etudiant</h1>
      <a href="index.php"><button id="button3" type="button" name="Ajouter Etudiant">Ajouter Etudiant</button></a>
      <a href="ajoutfiliere.php"><button id="button3" type="button" name="Ajouter Filliere">Ajouter Filliere</button></a>
      <br><br>
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
            <td><?php echo $row['Filiere'] ?></td>
            <td><?php echo $row['Naissance'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Password'] ?></td>
            <td>
              <a href="modif.php?id=<?php echo $row['id'] ?>"><button id="button1" type="button" name="Modifier">Modifier</button></a>
              <a href="confirmation.php?id=<?php echo $row['id']?>"><button id="button2" type="button" name="Supprimer">Supprimer</button></a>
            </td>
            <form class="" action="confSup.php" method="post">
              <td><input type="checkbox" name="supp[]" value="<?php echo $row['id']; ?>"></td>
              <?php } ?>
              <tr>
                <td colspan="9"></td>
                <td><input type="submit" name="submit" value="submit"></td>
              </tr>
            </form>
          </tr>
      </table>
    </div>
  </body>
</html>
