<?php
  class Personne
  {
    private $_nom;
    private $_vie;
    private $_degat;
    private $_id;
  
    public function __construct($idperso)
    {
        
  
        try
        {
          $BDD = new PDO('mysql:host=192.168.65.192; dbname=BaseDeDonneePersonnage; charset=utf8','Mimos', 'D12622');
          $statBDD = $BDD->query("SELECT * FROM Personnages WHERE id_choix = '".$idperso."' ");
          $statBDD = $statBDD->fetch();

          $this->_nom = $statBDD['Pseudo'];
          $this->_vie = $statBDD['Vie'];
          $this->_degat = $statBDD['Puissance'];
        }
      catch (Exception $erreur)
      {
        echo 'Erreur : '.$erreur->getmessage();
      }
      $this->_id = $idperso;
    }
   

    public function getDegat()
    {
      return $this->_degat;
    }

    public function getID()
    {
      return $this->_id;
    }
    
    public function AfficherPersonnage()
    {
      echo "<p>Je suis ".$this->_nom.', </p> ';
      echo "<p>J'ai ".$this->_vie.' point de santé.';
      echo "<p>J'ai ".$this->_degat.' point de puissance.';
    }
  
  }
  ?>