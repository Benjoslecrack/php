<?php

    class CategorieEntity{

        //attributs

        protected int $id_cat;
        protected string $nom_cat;
        
    /**
     * class qui reprend la table catégorie de la BDD
    *
    * @param integer $id_cat
    * @param string $nom_cat
    */     

        // constructeur

        public function __construct(int $id_cat, string $nom_cat)
        {
            $this->id_cat = $id_cat;
            $this->nom_cat = $nom_cat;
        }

        // getteurs setteurs

        public function getId() : int
        {
            return $this->id_cat;
        }

        public function setId(int $id_cat)
        {
            $this->id_cat = $id_cat;
                return $this;
        }

        public function getNomCat() : string
        {
            return $this->nom_cat;
        }

        public function setNomCat(string $nom_cat)
        {
            $this->nom_cat= $nom_cat;
                return $this;
        }



}