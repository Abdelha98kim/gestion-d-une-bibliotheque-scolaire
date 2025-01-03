<?php
    class Administrateur{
        // les attributes
        private $id, $nom, $prenom, $email, $password, $role;

        // Constructore
        public function __construct($id, $nom, $prenom, $email, $password, $role){
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }
    }
?>