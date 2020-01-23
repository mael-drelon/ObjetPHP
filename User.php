<?php
class User    
{
    private$_id;
    private$_Nom;
    
    public function _construct($id,$nom)
    {
        try 
        {
            $base = new PDO('mysql:host=localhost; dbname=BaseDeDonneePersonnage', 'root', 'root');
            $DonneeBruteUser = $base->query("SELECT * from Personnages");
            $TabUserIndex = 0;
            while ($tab = $DonneeBruteUser->fetch())
            {
                $TabUser[$TabUserIndex++] = new User($tab['ID_User'],$tab['Nom']);        
            }     

        }
    catch(exception$e) 
        {
            $e->getMessage();
        }

    $this->_id = $id;
    $this->_Nom = $nom;  
    }

    public function getId()
    {
        return $this->_id;        
    }

    public function getNom()
    {
        return $this->_Nom;        
    }    
}
?>
