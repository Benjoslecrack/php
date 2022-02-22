<?php

    class MusiqueEntity{

        // Attributs
    
        protected int $id;
        protected string $image;
        protected string $titre;
        protected string $description;
        protected int $prix;

        /**
         * class qui reprend la table catégorie de la BDD
         *
         * @param integer $id
         * @param string $image
         * @param string $titre
         * @param string $description
         * @param integer $prix
         */


         // constructeur

        public function __construct(int $id, string $image, string $titre, string $description,int $prix)
        {
            $this->id = $id;
            $this->image= $image;
            $this->titre= $titre;
            $this->description= $description;
            $this->prix= $prix;    
        }
        // getteurs setteurs
    
        public function getId() : int
        {
            return $this->id;
        }
        public function setId(int $id)
        {
            $this->id=$id;
            return $this;
        }
    
        public function getImage() : string 
        {
            return $this->image;
        }
        public function setImage(string $image)
        {
            $this->image=$image;
            return $this;
        }
    
        public function getTitre() :string
        {
            return $this->titre;
        }
        public function setTitre( string $title)
        {
            $this->titre=$title;
            return $this;
        }
    
        public function getDescription() : string
        {
            return $this->description;
        }
        public function setDescription( string $description)
        {
            $this->description=$description;
            return $this;
        }
    
        public function getPrix() : int
        {
            return $this->prix;
        }
        public function setPrix(string $prix)
        {
            $this->prix=$prix;
            return $this;

        } 
        
    }

