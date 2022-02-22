<?php

require_once '../Model/Model.php';
require_once '../entity/MusiqueEntity.php';


class MusiqueRepository extends Model{ // héritage de class Model (connexion BDD)

    // attributs

    protected array $musiques = array();

/**
 * Undocumented function
 *
 * @param [type] $musique
 * @return void
 */    

    //Méthodes

    public function chargementMusiques() // récupère les musiques de la bdd et remplir le tableau $musiques
    {
        $req = $this->getBdd()->prepare("SELECT * FROM musique");
        $req->execute();
        $mesMusiques = $req->fetchAll(PDO::FETCH_ASSOC); // $mesmusiques = array et fetch_assoc évite les doublons du titre, de l'image dans la table musique de la bdd
        $req->closeCursor();

        foreach($mesMusiques as $musique){ //pour chaque musique de la table store je vais chercher les champs de la table
            $this->musiques[]= new MusiqueEntity($musique['id_musique'],$musique['image'],$musique['titre'],$musique['description'],$musique['prix']);
             // ajout de chaque musique dans le tableau de musiques
        }
    }

    // getteurs

    public function getMusiques() : array // recupère le tableaux de musiques rempli
    { 
        return $this->musiques;
    }

}