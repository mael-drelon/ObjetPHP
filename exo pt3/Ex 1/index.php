<?php require("User.php"); ?>
<?php

  $personne1 = new personne();

  $personne1->nom = ' Hamon ';
  $personne1->prenom = ' Hugo ';
  echo '<p>Nom : ', $personne1->nom,'</p> ';
  echo '<p>Prénom : ', $personne1->prenom,'</p> ';
  ?>