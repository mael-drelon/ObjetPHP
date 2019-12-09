<?php require("User.php"); ?>
<?php require("Personnage.php"); ?>

<html>
<head>
</head>
<body>
<?php echo "<h1>You encounter an foe!</h1>";
$Personnage1 = new Personnage(250,25,"Mimos");
$Personnage2 = new Personnage(200,10,"Banshee");

$Personnage1->AfficherPersonnage();
$Personnage2->AfficherPersonnage();

echo "<p>Lancement du combat</p>";
while( $Personnage1->alive() && $Personnage2->alive())
{
    if(rand(0, 1))
    {
        $Personnage1->Attaquer($Personnage2);
    }    
    else
    {
        $Personnage2->Attaquer($Personnage1);
    }
}


?>


















</body>
</html>