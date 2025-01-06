<?php

    include("../Roles/roles.php");
    class User{
        // les attributes
        private $id, $nom, $prenom, $email, $password, $role;

        // Constructore
        public function __construct($id, $nom, $prenom, $email, $password, Roles $role){
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        // Setters
        public function setId($id){
            $this->id = $id;
        }

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

        // getters
        public function getId(){
            return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getRole(){
            return $this->role;
        }

        // to string 
        public function __tostring(){
            return "Id: " . $this->id . "<br>" . "Nom: " . $this->nom .  "<br>" . " Prenom: " . $this->prenom . "<br>" . " Email: " . $this->email . "<br>" . " Password: " . $this->password . "<br>" . " Role: " . $this->role . "<br>";
        }
    }
?>