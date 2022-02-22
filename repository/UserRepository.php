<?php

require "../entity/UserEntity.php";
require "../Model/Model.php";

class UserRepository extends Model{ // héritage de class Model (connexion BDD)

    // attributs

    protected array $users = array();

/**
 * Undocumented function
 *
 * @param [type] $musique
 * @return void
 */    

    //Méthodes

    public function chargementUsers() // récupère les musiques de la bdd et remplir le tableau $musiques
    {
        $req = $this->getBdd()->prepare("SELECT * FROM user");
        $req->execute();
        $mesUsers = $req->fetchAll(PDO::FETCH_ASSOC); // $mesmusiques = array et fetch_assoc évite les doublons du titre, de l'image dans la table musique de la bdd
        $req->closeCursor();

        foreach($mesUsers as $user){ //pour chaque musique de la table store je vais chercher les champs de la table
            $this->users[]= new UserEntity($user['id_user'],$user['email_user'],$user['pwd_user']);
             // ajout de chaque musique dans le tableau de musiques
        }
    }

    // getteurs

    public function getUsers() : array // recupère le tableaux de musiques rempli
    { 
        return $this->users;
    }

}