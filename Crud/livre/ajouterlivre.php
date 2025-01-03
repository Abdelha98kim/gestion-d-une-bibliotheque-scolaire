<?php
     include("../../core/config/connexion.php");

     class Ajouterlivre{
        // Attributes
        private $nom, $auteur, $date_creation, $prix, $seriale, $quantite;

        // Constructor
        public function __construct($nom, $auteur, $date_creation, $prix, $seriale, $quantite){
            $this->nom = $nom;
            $this->auteur = $auteur;
            $this->date_creation = $date_creation;
            $this->prix = $prix;
            $this->seriale = $seriale;
            $this->quantite = $quantite;
        }

        // Setters
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setAuteur($auteur){
            $this->auteur = $auteur;
        }

        public function setDateDeCreation($date_creation){
            $this->date_creation = $date_creation;
        }

        public function setPrix($prix){
            $this->prix = $prix;
        }

        public function setSeriale($seriale){
            $this->seriale = $seriale;
        }

        public function setQuantite($quantite){
            $this->quantite = $quantite;
        }
     }
?>