<?php
  class personne
  {
    private $_nom;
    private $_prenom;
    private $_vie;

  
  public function __construct($vie,$nom)
    {
        $this->_nom = $nom;
        $this->_vie = $vie;
    }
    public function AfficherPersonnage()
    {
        echo "<p>Je suis ".$this->_nom.', </p> ';
        echo "<p>J'ai ".$this->_vie.' de santé.';
    }
  }
  ?>