<?php
class Personnage
{
    private $_pseudo;
    private $_vie;
    private $_force;
    private $_islife;

    public function __construct($valeurvie,$laforce,$lepseudo)
    {
        $this->_pseudo = $lepseudo;
        $this->_vie = $valeurvie;
        $this->_force = $laforce;
        $this->_islife = true;
    }

    public function AfficherPersonnage()
    {
        echo "<p>Je suis ".$this->_pseudo.', </p> ';
        echo "<p>J'ai ".$this->_vie.' de santé et '.$this->_force,' point de dégat</p>';
    }


}