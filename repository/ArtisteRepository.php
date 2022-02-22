<?php

require_once '../Model/Model.php';
require_once '../entity/ArtisteEntity.php';

    class ArtisteRepository extends Model{

    // Attributs

    protected array $artistes;

    // Méthodes

    public function chargementArtistes() 
    {
        $req = $this->getBdd()->prepare("SELECT * FROM artistes");
        $req->execute();
        $mesArtistes = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach($mesArtistes as $artiste){ 
            $this->artistes[] = new ArtisteEntity($artiste['id_artiste'],$artiste['nom_artiste']);
        }
    }

    public function artistesRap()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM artistes");
        $req->execute();
        $mesArtistes = $req->fetchAll(PDO::FETCH_ASSOC);
    }


    // getteurs

    public function getArtistes() : array // recupère le tableau des artistes rempli
    { 
        return $this->artistes;
    }

}