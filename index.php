<?php require("User.php"); ?>
<?php require("Personnage.php"); ?>

<html>
<head>
</head>
<body>
<?php echo "<h1>You encounter an foe!</h1>";
$Personnage1 = new Personnage(100,25,"Mimos");
$Personnage2 = new Personnage(200,10,"Banshee");

$Personnage1->AfficherPersonnage();
$Personnage2->AfficherPersonnage();

?>


















</body>
</html>