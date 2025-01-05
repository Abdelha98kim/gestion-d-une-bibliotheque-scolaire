<?php
    include("../User/user.php");

    // Creation de class d'administrateur depuis le user 
    class Administrateur extends User{

    }

    $admin = new Administrateur(1, "Baalla", "Abdelhakim", "b7521abaalla@gmail.com", "hrtt321568", "admin");
    echo $admin->__tostring();

?>