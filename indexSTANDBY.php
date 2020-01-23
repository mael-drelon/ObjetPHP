<?php require("Liste.php"); ?>
<?php require("User.php"); ?>
<?php require("Personnage.php"); ?>

<html>
<head>
</head>
<body>

<?php 
echo "<h1>You encounter a foe!</h1>";
$Personnage1 = new Personnage(250,25,"Mimos");
$Personnage2 = new Personnage(200,10,"Banshee");

$Personnage1->AfficherPersonnage();
$Personnage2->AfficherPersonnage();

echo "<p>Lancement du combat</p>";

if(rand(0, 1))
{
    $Personnage1->Attaquer($Personnage2);
}    
else
{
    $Personnage2->Attaquer($Personnage1);
}
?>

<FORM action="" methode="POST">
<select name="Personnage"id="Perso-select">
<?php 
foreach ($TabUser as $objetUser) 
{
    echo'<option value="'.$objetUser->getId().'">'.$objetUser->getNom().'</option>';                
}
if (isset($_POST["user"]))
{
    foreach ($TabUser as $objetUser) 
    {
        if ($objetUser->getId()==$_POST["user"])
        {
            $objetUser->afficherUser();            
        }       
    }      
}
else
{
    echo "Aucun user selectionné";
}
?>
</select>
<input type="submit">
</input>
</FORM>


















</body>
</html>