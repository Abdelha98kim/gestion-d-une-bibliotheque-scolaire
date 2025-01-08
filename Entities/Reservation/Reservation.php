<?php
    include ("../Etat/etat.php");
    include ("../Livre/livre.php");
    include ("../Apprenant/apprenant.php");

    class Reservation {
        private $id ;
        private $start_date;
        private $final_date;
        private $etat ; 
        private $livre ;
        private $apprenant;

        public function __construct($id , date $start_date , date $final_date ,Etat $etat ,Livre $livre,Apprenant $apprenant) {
            $this->id = $id;
            $this->start_date = $start_date;
            $this->final_date = $final_date;
            $this->etat = $etat;
            $this->livre = $livre;
            $this->apprenant = $apprenant;
        }


    }

    


?>