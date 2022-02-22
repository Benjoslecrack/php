<?php

class ArtisteEntity{

    //  Attributs

    protected int $id_artiste;
    protected string $nom_artiste;
    
        /**
         * Undocumented function
         *
         * @param integer $id_artiste
         * @param string $nom_artiste
         */
    // constructeur

    public function __construct(int $id_artiste, string $nom_artiste)
    {
        $this-> id_artiste = $id_artiste;
        $this->nom_artiste = $nom_artiste;
    }

    // getteurs setteurs

    public function getId() : int
    {
        return $this->id_artiste;
    }

    public function setId(int $id_artiste)
    {
         $this->id_artiste = $id_artiste;
         return $this;
    }

    public function getNomArt() : string
    {
        return $this->nom_artiste;
    }

    public function setNomArt(string $nom_artiste)
    {
         $this->nom_artiste= $nom_artiste;
         return $this;
    }
    
}