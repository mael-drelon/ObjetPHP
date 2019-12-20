<?php
class Personnage
{
    private $_pseudo;
    private $_vie;
    private $_force;
    private $_alive;

    public function __construct($valeurvie,$laforce,$lepseudo)
    {
        $this->_pseudo = $lepseudo;
        $this->_vie = $valeurvie;
        $this->_force = $laforce;
        $this->_alive = true;
    }

    public function AfficherPersonnage()
    {
        echo "<p>Je suis ".$this->_pseudo.', </p> ';
        echo "<p>J'ai ".$this->_vie.' de santé.';
    }
    
    public function Attaquer($ObjetPersonnage)
    {
        $this->_force - $ObjetPersonnage->_vie;
        echo "<p>".$this->_pseudo." attaque ".$ObjetPersonnage->getNom();
        echo "<p>".$ObjetPersonnage->getNom()." à encore ".$ObjetPersonnage->_vie." HP. ";
    }

    public function alive()
    {
      
    }

    public function damaged()
    {
        
    }

    public function getNom()
    {
        return $this->_pseudo;
    }

}