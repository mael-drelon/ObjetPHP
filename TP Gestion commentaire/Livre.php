<?php
 class Livre
 {
    private $_id;
    private $_titre;
    private $_genre;
    private $_auteur;

    public function __construct($idlivre)
    {
        try
        {
          $BDD = new PDO('mysql:host=192.168.65.192; dbname=(nom base); charset=utf8','(user)', '(MDP)');
          $statBDD = $BDD->query("SELECT * FROM Livre WHERE id_livre = '".$idlivre."' ");
          $statBDD = $statBDD->fetch();

          $this->_titre = $statBDD['Titre'];
          $this->_genre = $statBDD['Genre'];
          $this->_auteur = $statBDD['Auteur'];
        }
      catch (Exception $erreur)
      {
        echo 'Erreur : '.$erreur->getmessage();
      }
      $this->_id = $idlivre;
    }
    public function getTitre()
    {
      return $this->_titre;
    }

    public function getID()
    {
      return $this->_id;
    }
    public function getGenre()
    {
      return $this->_genre;
    }
    public function getAuteur()
    {
      return $this->_auteur;
    }
 }