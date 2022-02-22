<?php

require_once '../Model/Model.php';
require_once '../entity/CategorieEntity.php';

class CategorieRepository extends Model{

    // Attributs

    protected array $categories;

    // Méthodes

    public function chargementCategories() 
    {
        $req = $this->getBdd()->prepare("SELECT * FROM categories");
        $req->execute();
        $mesCategories = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach($mesCategories as $categorie){ 
            $this->categories[] = new CategorieEntity($categorie['id_cat'],$categorie['nom_cat']);
        }
    }

    // getteurs

    public function getCategories() : array // recupère le tableau de categories rempli
    { 
        return $this->categories;
    }

}
