<?php
    include("../User/user.php");

    // Creation de class d'administrateur depuis le user 
    class Administrateur extends User{

    }

    $admin = new Administrateur(1, "Baalla", "Abdelhakim", "Abdelhakimbaalla50@gmail.com", "hzee 321 mkl 456", "admin");

?>