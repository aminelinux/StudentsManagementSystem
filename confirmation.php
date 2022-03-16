<?php
include 'connexion.php';
$id = $_GET['id'];
$sql = "SELECT Matricule,Nom,Prenom From etudiant WHERE id = '$id'";
$data = MySQLi_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>confirmation Suppression</title>
   </head>
   <body>
     <div class="">
      <?php while ($res=mysqli_fetch_assoc($data)) { ?>
         <h1>Vouler-vous vraiment supprimer l'etudiant <?php echo $res['Nom'] ?> <?php echo $res['Prenom'] ?> avec le Matricule <?php echo $res['Matricule'] ?></h1>
      <?php } ?>

       <a href="consult.php"><button type="button" name="Refuser"> Refuser</button> </a>
       <a href="supprimer.php?id=<?php echo "$id"; ?>"><button type="button" name="confirmmer">Confirmer</button> </a>
     </div>
   </body>
 </html>
