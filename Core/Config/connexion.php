<?php
    class Connexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "biblioschool";

        public function connexion(){
            try {
                $link = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->user, $this->password);
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }
        }
    }

    $connexion = new Connexion();
    $connexion->connexion();
?>