<?php
require_once("Model/Candidat.php"); 
require_once("Model/Recreteur.php"); 

ob_start();
class ControllerSignup {
   private $conn ;

    public function __construct($conn) {
       $this->conn=$conn;
        // $this->recruteur = new Recruteur();
    }

    public function submitForm() {
        if (isset($_POST['ct'])) {
            if ( isset($_POST['nom']) and isset($_POST['prenom'])) {
                $candidat = new Candidat( $this->conn , $_POST['nom'],$_POST['prenom'] ,"ggg@j.ccc" , "Ass123", "1234566778");
               if($candidat->signup()){
                ob_clean();
                header('Location: ./view/Candidat.php');
            // } elseif (isset($_POST['type']) && $_POST['type'] === 'recruteur') {
            //     $this->recruteur->signup();
            } else {
                // handle error, invalid form type
                echo "somme thing warring";
            }
        } else {
            // handle error, form not 
            echo "there is biig prob";
        }
    }
    ob_end_flush();
    }
}