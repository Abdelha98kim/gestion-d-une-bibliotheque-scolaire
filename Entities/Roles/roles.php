<?php

 class Roles {
    private $id;
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }


    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }
 }

?> 