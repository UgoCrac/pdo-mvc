<?php

class Voiture{
    private $immat;
    private $idModele;
    private $couleur;
    private $dateVoiture;

    public function __construct($immat, $idModele, $couleur, $dateVoiture){
        $this->setImmat($immat);
        $this->setIdModele($idModele);
        $this->setCouleur($couleur);
        $this->setDateVoiture($dateVoiture);
    }

    /**
     * Get the value of immat
     */ 
    public function getImmat()
    {
        return $this->immat;
    }

    /**
     * Set the value of immat
     *
     * @return  self
     */ 
    public function setImmat($immat)
    {
        $this->immat = $immat;

        return $this;
    }

    /**
     * Get the value of idModele
     */ 
    public function getIdModele()
    {
        return $this->idModele;
    }

    /**
     * Set the value of idModele
     *
     * @return  self
     */ 
    public function setIdModele($idModele)
    {
        $this->idModele = $idModele;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of dateVoiture
     */ 
    public function getDateVoiture()
    {
        return $this->dateVoiture;
    }

    /**
     * Set the value of dateVoiture
     *
     * @return  self
     */ 
    public function setDateVoiture($dateVoiture)
    {
        $this->dateVoiture = $dateVoiture;

        return $this;
    }
}

?>