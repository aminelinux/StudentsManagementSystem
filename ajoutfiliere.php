<?php
echo "string";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="main_form">
      <form align="center" action="ajout.php" method="POST">
        <fieldset>
          <legend align="center"> Ajouter Filliere</legend>
          <label for="Nom">Nom Filliere :</label><br>
          <input type="text" name="filiere_nom" value=""><br>
          <label for="Departement">Departement :</label><br>
          <input type="text" name="Departement" value=""><br>
          <label for="nb_groups"> Nombre de groupes</label><br>
          <input type="text" name="nb_groups" value=""><br><br>

          <input type="submit" name="submit" value="submit"><br>

        </fieldset>
      </form>

    </div>
  </body>
</html>
