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
        echo "<p>".$this->_pseudo." attaque ".$ObjetPersonnage->getNom();
        $this->_vie = $this->_vie-50;
    }

    public function alive()
    {
       $ObjetPersonnage = $this->_alive;
    }
}