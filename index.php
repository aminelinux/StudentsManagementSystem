
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ajouter Etudiant</title>

  </head>
  <body >
    <div class="main" align = "center">
      <form align="center" class="main_form" action="register.php" method="POST">
      <fieldset >
        <legend>Formulaire</legend>
          <label for="Matricule"> Matricule :</label><br>
          <input type="text" name="Matricule" value=""><br><br>
          <label for="Nom">Nom :</label><br>
          <input type="text" name="Nom" value=""><br><br>
          <label for="Prenom"> Prenom :</label><br>
          <input type="text" name="Prenom" value=""><br><br>
          <label for="Adresse"> Adresse :</label><br>
          <input type="text" name="Adresse" value=""><br><br>
          <label for="E-mail">Email :</label><br>
          <input type="email" name="Email" value=""><br><br>
          <label for="Filliere"> Filliere :</label><br>
          <input type="text" name="Filliere" value=""><br><br>
          <label for="DateDeNaissance"> Date De Naissance :</label><br>
          <input type="date" name="Date" value=""><br><br>
          <label for="Password"> Password :</label><br>
          <input type="password" name="Password" value=""><br><br>
          <input type="submit" name="submit" value="Ajouter">
      </fieldset>
      </form>
    </div>
  </body>
</html>
