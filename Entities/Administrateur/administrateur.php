<?php
    class Administrateur{
        // les attributes
        private $nom, $prenom, $email, $password, $role;

        // Constructore
        public function __construct($nom, $prenom, $email, $password, $role){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        // Setters
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setRole($role){
            $this->role = $role;
        }
    }
?>