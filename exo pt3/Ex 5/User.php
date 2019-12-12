<?php
  class personne
  {
    private $_nom;
    private $_vie;
    private $_degat;
    private $_id;

  
  public function __construct($vie,$nom)
    {
        $this->_nom = $nom;
        $this->_vie = $vie;
        $this->_degat = 50;
        $this->_id = $Base = new PDO('mysql:host=192.168.65.192; dbname=BaseDeDonneePersonnage; charset=utf8','Mimos', 'D12622');
    }
    public function AfficherPersonnage()
    {
        echo "<p>Je suis ".$this->_nom.', </p> ';
        echo "<p>J'ai ".$this->_vie.' de santé.';
    }
    public function Attaquer($ObjetPersonnage)
    {
      $ObjetPersonnage->Defense($this->_degat);
        echo "<p>".$this->_nom." attaque ".$ObjetPersonnage->getNom();
        $this->_vie = $this->_vie-50;
        echo "<p>".$ObjetPersonnage->getNom()." lui reste ".$this->_vie." HP ";
    }
    public function getNom()  
    {
      return $this->_nom;
    }
    public function Defense($_degat)
    {
      $this->_vie = $this->_vie - $_degat;
    }
  
  
  
  }
  ?>