<?php require("User.php"); ?>
<?php

  $personne1 = new personne(100,'Julien');
  $personne2 = new personne(100,'Dummy');
  $personne1->AfficherPersonnage();
  $personne2->AfficherPersonnage();
  $personne1->Attaquer($personne2);
  ?>