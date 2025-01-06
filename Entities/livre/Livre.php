<?php

    include("../Tag/tag.php");
    include("../Categorie/categorie.php");
    include("../Quantite/quantite.php");

    class Livre{
        private $id, $nom, $auteur, $date_creation, $prix, $seriale, $tag, $categorie, $quantite;
        
        public function __construct($id, $nom, $auteur, $date_creation, $prix, $seriale, Tag $tag, Categorie $categorie, Quantite $quantite){
            $this->id = $id;
            $this->nom = $nom;
            $this->auteur = $auteur;
            $this->date_creation = $date_creation;
            $this->prix = $prix;
            $this->seriale = $seriale;
            $this->tag = $tag;
            $this->categorie = $categorie;
            $this->quantite = $quantite;
        }

    }

?>