<?php
include 'connexion.php';
$data=$_POST['supp'];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="main">
      <label for="confiramtion"> voulez vous supprimez definetivement les etudiant</label>
      <a href="consult.php"><button type="button" name="refuser">refuser</button></a>
      <form class="" action="supprimerall.php" method="POST">
        <?php foreach ($data as $value): ?>
          <input type="hidden" name="data[]" value="<?php echo $value; ?>">
        <?php endforeach; ?>
        <input type="submit" name="Supprimer" value="Supprimer"></input>
      </form>
    </div>
  </body>
</html>
